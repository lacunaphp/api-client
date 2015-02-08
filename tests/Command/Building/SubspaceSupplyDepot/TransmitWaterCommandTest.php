<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SubspaceSupplyDepot;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\SubspaceSupplyDepot\TransmitWaterCommand;


class TransmitWaterCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new TransmitWaterCommand(static::MODULE, static::METHOD, [], []);
	}
}
