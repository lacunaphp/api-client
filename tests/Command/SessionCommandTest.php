<?php

namespace LacunaPHP\APIClient\Tests\Command;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\SessionCommand;


class SessionCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new SessionCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';

		$this->verifyCommandParams(
			['session_id' => $session_id],
			[$session_id]
		);
	}
}
