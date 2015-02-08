<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Empire\IsNameAvailableCommand;


class IsNameAvailableCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new IsNameAvailableCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$name = 'NAME';

		$this->verifyCommandParams(
			['name' => $name],
			[$name]
		);
	}
}
