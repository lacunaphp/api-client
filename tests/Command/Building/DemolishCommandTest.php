<?php

namespace LacunaPHP\APIClient\Tests\Command\Building;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\DemolishCommand;


class DemolishCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new DemolishCommand(static::MODULE, static::METHOD, [], []);
	}
}
