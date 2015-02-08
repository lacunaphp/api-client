<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\LogoutCommand;


class LogoutCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new LogoutCommand(static::MODULE, static::METHOD, [], []);
	}
}
