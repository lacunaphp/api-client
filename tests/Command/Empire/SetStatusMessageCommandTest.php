<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Empire\SetStatusMessageCommand;

class SetStatusMessageCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new SetStatusMessageCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$message = 'MESSAGE';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'message' => $message],
			[$session_id, $message]
		);
	}
}
