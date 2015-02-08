<?php

namespace LacunaPHP\APIClient\Tests\Command\Inbox;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Inbox\ArchiveMessagesCommand;


class ArchiveMessagesCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new ArchiveMessagesCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$message_ids = ['foo', 'bar', 'baz'];

		$this->verifyCommandParams(
			['session_id' => $session_id, 'message_ids' => $message_ids],
			[$session_id, $message_ids]
		);
	}
}
