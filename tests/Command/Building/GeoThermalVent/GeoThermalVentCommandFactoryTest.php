<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\GeoThermalVent;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\GeoThermalVent\GeoThermalVentCommandFactory;


class GeoThermalVentCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new GeoThermalVentCommandFactory('test');
	}
}
