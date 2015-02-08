<?php

namespace LacunaPHP\APIClient\Tests\Command;

use LacunaPHP\APIClient\Command\APICommandFactory;


class APICommandFactoryTest extends \PHPUnit_Framework_TestCase {
	protected $factory;

	public function setUp() {
		$this->factory = new APICommandFactory('test');
	}

	public function testGetName() {
		$this->assertEquals('test', $this->factory->getName());
	}

	protected function verifyCommandClass($name, $class) {
		$command = $this->factory->getCommand($name);

		$this->assertInstanceOf($class, $command);
	}
}
