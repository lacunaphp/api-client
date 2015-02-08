<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\WaterReclamation;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\WaterReclamation\WaterReclamationCommandFactory;


class WaterReclamationCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new WaterReclamationCommandFactory('test');
	}
}
