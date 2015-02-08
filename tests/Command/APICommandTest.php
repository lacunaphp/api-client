<?php

namespace LacunaPHP\APIClient\Tests\Command;

use LacunaPHP\APIClient\Command\APICommand;


class APICommandTest extends \PHPUnit_Framework_TestCase {
	const MODULE = 'module';
	const METHOD = 'method';

	protected $command;

	public function setUp() {
		$this->command = new APICommand(static::MODULE, static::METHOD, []);
	}

	public function testGetModule() {
		$this->assertEquals(static::MODULE, $this->command->getModule());
	}

	public function testGetMethod() {
		$this->assertEquals(static::METHOD, $this->command->getMethod());
	}

	public function testGetParams() {
		$this->verifyCommandParams([], []);
	}

	protected function verifyCommandParams(array $args = [], array $params = []) {
		$class = get_class($this->command);
		$command = new $class('module', 'method', $args, []);

		$this->assertEquals($params, $command->getParams());
	}
}
