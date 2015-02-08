<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SubspaceSupplyDepot;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\SubspaceSupplyDepot\TransmitFoodCommand;


class TransmitFoodCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new TransmitFoodCommand(static::MODULE, static::METHOD, [], []);
	}
}
