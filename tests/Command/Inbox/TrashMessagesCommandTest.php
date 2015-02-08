<?php

namespace LacunaPHP\APIClient\Tests\Command\Inbox;

use LacunaPHP\APIClient\Tests\Command\Inbox\ArchiveMessagesCommandTest;
use LacunaPHP\APIClient\Command\Inbox\TrashMessagesCommand;


class TrashMessagesCommandTest extends ArchiveMessagesCommandTest {

	public function setUp() {
		$this->command = new TrashMessagesCommand(static::MODULE, static::METHOD, [], []);
	}
}
