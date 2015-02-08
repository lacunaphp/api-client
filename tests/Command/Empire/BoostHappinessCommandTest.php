<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\BoostHappinessCommand;


class BoostHappinessCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new BoostHappinessCommand(static::MODULE, static::METHOD, [], []);
	}
}
