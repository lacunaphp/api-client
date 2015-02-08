<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Empire\ResetPasswordCommand;


class ResetPasswordCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new ResetPasswordCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$reset_key = 'RESET-KEY';
		$password1 = 'PASSWORD1';
		$password2 = 'PASSWORD2';
		$api_key = 'API-KEY';

		$this->verifyCommandParams(
			['reset_key' => $reset_key, 'password1' => $password1, 'password2' => $password2, 'api_key' => $api_key],
			[$reset_key, $password1, $password2, $api_key]
		);
	}
}
