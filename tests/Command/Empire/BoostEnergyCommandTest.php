<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\BoostEnergyCommand;


class BoostEnergyCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new BoostEnergyCommand(static::MODULE, static::METHOD, [], []);
	}
}
