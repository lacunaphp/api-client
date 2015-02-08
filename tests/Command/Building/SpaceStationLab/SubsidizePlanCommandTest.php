<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SpaceStationLab;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\SpaceStationLab\SubsidizePlanCommand;


class SubsidizePlanCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new SubsidizePlanCommand(static::MODULE, static::METHOD, [], []);
	}
}
