<?php

namespace LacunaPHP\APIClient\Tests;

use LacunaPHP\APIClient\Module;


class ClientModuleTest extends \PHPUnit_Framework_TestCase {

	public function testMagicMethodCall() {
		$args = [
			'hello' => 'world',
			'foo'   => ['bar', 'baz']
		];

		$client = $this->getMockBuilder('LacunaPHP\APIClient\Client')
			->disableOriginalConstructor()
			->getMock();

		$client->expects($this->any())
			->method('__call')
			->with($this->equalTo('module.method'), $this->equalTo([$args]))
		;

		$module = new Module($client, 'module');

		$module->__call('method', [$args]);
		$module->method($args);
	}
}
