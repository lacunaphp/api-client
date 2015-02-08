<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Empire\LoginCommand;


class LoginCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new LoginCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$name = 'NAME';
		$password = 'PASSWORD';
		$api_key = 'API-KEY';

		$this->verifyCommandParams(
			['name' => $name, 'password' => $password, 'api_key' => $api_key],
			[$name, $password, $api_key]
		);
	}
}
