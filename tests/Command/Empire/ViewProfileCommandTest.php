<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\ViewProfileCommand;


class ViewProfileCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new ViewProfileCommand(static::MODULE, static::METHOD, [], []);
	}
}
