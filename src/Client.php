<?php

namespace LacunaPHP\APIClient;

use LacunaPHP\APIClient\Module;

use LacunaPHP\APIClient\Command\APICommandFactory;
use LacunaPHP\APIClient\Command\APICommandInterface;
use LacunaPHP\APIClient\Exception\APIErrorException;
use LacunaPHP\APIClient\Module\APIModule;

use GuzzleHttp\Client as HTTPClient;
use GuzzleHttp\Command\AbstractClient;
use GuzzleHttp\Command\CommandTransaction;
use GuzzleHttp\Command\Event\ProcessEvent;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Command\Exception\CommandException;


class Client extends AbstractClient {
	private $factories;
	private $modules;
	private $commands;

	public function __construct($url, array $config = []) {
		$this->factories = [];
		$this->modules = [];

		$client = new HTTPClient([
			'base_url' => $url
		]);

		parent::__construct($client, $config);
	}

	public function getFactory($name) {
		if(isset($this->factories[$name])) {
			return $this->factories[$name];
		}

		return $this->factories[$name] = APICommandFactory::create($name);
	}

	public function getModule($name) {
		if(isset($this->modules[$name])) {
			return $this->modules[$name];
		}

		return $this->modules[$name] = APIModule::create($name);
	}

	public function getCommand($name, array $args = []) {
		$parts = preg_split(
			'/[._-]/',
			strtolower($name),
			null,
			PREG_SPLIT_NO_EMPTY
		);

		$factory = $this->getFactory(array_shift($parts));
		$command = $factory->getCommand(implode($parts), $args);

		$command->getEmitter()->on('process', function(ProcessEvent $event) {
			$result = $this->processResponse($event->getTransaction());

			$event->setResult($result);
		});

		return $command;
	}

	public function serializeRequest(CommandTransaction $transaction) {
		if(!$transaction->command) {
			throw new \Exception('missing/invalid command (' . gettype($transaction->command) . ')');
		}

		if(!$transaction->command instanceof APICommandInterface) {
			throw new \Exception('invalid command class (' . get_class($transaction->command) . ')');
		}

		$request = $this->getHttpClient()->createRequest('POST', '/' . $transaction->command->getModule(), [
			'json' => [
				'jsonrpc' => '2.0',
				'id'      => $transaction->command->getID(),
				'method'  => $transaction->command->getMethod(),
				'params'  => $transaction->command->getParams()
			]
		]);

		return $request;
	}

	public function processResponse(CommandTransaction $transaction) {
		$payload = $transaction->response->json();

		if($payload['error']) {
			throw APIErrorException::create($transaction);
		}

		// replace string datetime with objects
		array_walk_recursive($payload['result'], function(&$value, $key) {
			//01 31 2010 13:09:05 +0600
			$pattern = '/^\d{2}\s\d{2}\s\d{4}\s\d{2}:\d{2}:\d{2}\s.?\d{4}$/';
			$format = 'd m Y H:i:s O';
			if(preg_match($pattern, $value)) {
				$value = \DateTime::createFromFormat($format, $value);
			}
		});

		/*
		array_walk_recursive($payload['result'], function($value, $key) {
			if($value instanceof \DateTime) {
				print '[' . $key . '] ' . $value->format(\DateTime::RFC850) . "\n";
			}
		});
		*/

		return [
			'id'     => $payload['id'],
			'code'   => $transaction->response->getStatusCode(),
			'result' => $payload['result'] ?: []
		];
	}

	public function __isset($name) {
		return true;
	}

	public function __get($name) {
		return new Module($this, $name);
	}
}
