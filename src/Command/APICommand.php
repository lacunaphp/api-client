<?php

namespace LacunaPHP\APIClient\Command;

use LacunaPHP\APIClient\Command\APICommandInterface;
use GuzzleHttp\Command\Command;
use GuzzleHttp\Event\EmitterInterface;
use GuzzleHttp\Command\Event\ProcessEvent;


class APICommand extends Command implements APICommandInterface {
	private $module;
	private $method;
	private $params;
	private $id;

	public function __construct($module, $method, array $args = [], array $options = []) {
		$this->module = $module;
		$this->method = $method;

		if(isset($args['id'])) {
			$this->id = $args['id'];
			unset($args['id']);
		} else {
			$this->id = 1;
		}

		$this->params = $this->buildParams($args);

		parent::__construct($this->module . '.' . $this->method, $args, $options);
	}

	protected function buildParams(array $args = []) {
		return [];
	}

	public function getModule() {
		return $this->module;
	}

	public function getMethod() {
		return $this->method;
	}

	public function getParams() {
		return $this->params;
	}

	public function getId() {
		return $this->id;
	}
}
