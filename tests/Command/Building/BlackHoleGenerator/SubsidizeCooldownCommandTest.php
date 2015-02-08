<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\BlackHoleGenerator;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\BlackHoleGenerator\SubsidizeCooldownCommand;


class SubsidizeCooldownCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new SubsidizeCooldownCommand(static::MODULE, static::METHOD, [], []);
	}
}
