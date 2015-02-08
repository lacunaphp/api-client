<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\WaterPurification;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\WaterPurification\WaterPurificationCommandFactory;


class WaterPurificationCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new WaterPurificationCommandFactory('test');
	}
}
