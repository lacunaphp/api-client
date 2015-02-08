<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\LuxuryHousing;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\LuxuryHousing\LuxuryHousingCommandFactory;


class LuxuryHousingCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new LuxuryHousingCommandFactory('test');
	}
}
