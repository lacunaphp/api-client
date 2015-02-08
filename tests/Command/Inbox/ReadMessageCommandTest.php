<?php

namespace LacunaPHP\APIClient\Tests\Command\Inbox;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Inbox\ReadMessageCommand;


class ReadMessageCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new ReadMessageCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$message_id = 'MESSAGE-ID';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'message_id' => $message_id],
			[$session_id, $message_id]
		);
	}
}
