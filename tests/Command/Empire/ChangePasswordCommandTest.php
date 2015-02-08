<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Empire\ChangePasswordCommand;


class ChangePasswordCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new ChangePasswordCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$password1 = 'PASSWORD1';
		$password2 = 'PASSWORD2';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'password1' => $password1, 'password2' => $password2],
			[$session_id, $password1, $password2]
		);
	}
}
