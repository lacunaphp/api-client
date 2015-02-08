<?php

namespace LacunaPHP\APIClient\Tests\Command\Inbox;

use LacunaPHP\APIClient\Tests\Command\Inbox\ViewInboxCommandTest;
use LacunaPHP\APIClient\Command\Inbox\ViewTrashedCommand;


class ViewTrashedCommandTest extends ViewInboxCommandTest {

	public function setUp() {
		$this->command = new ViewTrashedCommand(static::MODULE, static::METHOD, [], []);
	}
}
