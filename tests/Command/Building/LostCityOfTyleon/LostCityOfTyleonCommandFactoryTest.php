<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\LostCityOfTyleon;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\LostCityOfTyleon\LostCityOfTyleonCommandFactory;


class LostCityOfTyleonCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new LostCityOfTyleonCommandFactory('test');
	}
}
