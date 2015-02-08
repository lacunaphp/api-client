<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\WasteEnergy;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\WasteEnergy\WasteEnergyCommandFactory;


class WasteEnergyCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new WasteEnergyCommandFactory('test');
	}
}
