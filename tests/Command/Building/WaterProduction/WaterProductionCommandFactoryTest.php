<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\WaterProduction;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\WaterProduction\WaterProductionCommandFactory;


class WaterProductionCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new WaterProductionCommandFactory('test');
	}
}
