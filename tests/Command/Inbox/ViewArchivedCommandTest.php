<?php

namespace LacunaPHP\APIClient\Tests\Command\Inbox;

use LacunaPHP\APIClient\Tests\Command\Inbox\ViewInboxCommandTest;
use LacunaPHP\APIClient\Command\Inbox\ViewArchivedCommand;


class ViewArchivedCommandTest extends ViewInboxCommandTest {

	public function setUp() {
		$this->command = new ViewArchivedCommand(static::MODULE, static::METHOD, [], []);
	}
}
