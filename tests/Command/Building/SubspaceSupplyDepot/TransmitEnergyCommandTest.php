<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SubspaceSupplyDepot;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\SubspaceSupplyDepot\TransmitEnergyCommand;


class TransmitEnergyCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new TransmitEnergyCommand(static::MODULE, static::METHOD, [], []);
	}
}
