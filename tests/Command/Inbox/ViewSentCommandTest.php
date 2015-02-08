<?php

namespace LacunaPHP\APIClient\Tests\Command\Inbox;

use LacunaPHP\APIClient\Tests\Command\Inbox\ViewInboxCommandTest;
use LacunaPHP\APIClient\Command\Inbox\ViewSentCommand;


class ViewSentCommandTest extends ViewInboxCommandTest {

	public function setUp() {
		$this->command = new ViewSentCommand(static::MODULE, static::METHOD, [], []);
	}
}
