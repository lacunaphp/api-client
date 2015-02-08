<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\PlanetaryCommand;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\PlanetaryCommand\SubsidizePodCooldownCommand;


class SubsidizePodCooldownCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new SubsidizePodCooldownCommand(static::MODULE, static::METHOD, [], []);
	}
}
