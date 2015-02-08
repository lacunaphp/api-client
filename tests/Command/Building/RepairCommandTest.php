<?php

namespace LacunaPHP\APIClient\Tests\Command\Building;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\RepairCommand;


class RepairCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new RepairCommand(static::MODULE, static::METHOD, [], []);
	}
}
