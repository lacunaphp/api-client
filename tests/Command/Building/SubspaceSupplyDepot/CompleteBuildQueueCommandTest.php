<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SubspaceSupplyDepot;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\SubspaceSupplyDepot\CompleteBuildQueueCommand;


class CompleteBuildQueueCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new CompleteBuildQueueCommand(static::MODULE, static::METHOD, [], []);
	}
}
