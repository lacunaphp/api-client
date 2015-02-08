<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Shipyard;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Shipyard\SubsidizeBuildQueueCommand;


class SubsidizeBuildQueueCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new SubsidizeBuildQueueCommand(static::MODULE, static::METHOD, [], []);
	}
}
