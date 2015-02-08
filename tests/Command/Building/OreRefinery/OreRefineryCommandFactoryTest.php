<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\OreRefinery;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\OreRefinery\OreRefineryCommandFactory;


class OreRefineryCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new OreRefineryCommandFactory('test');
	}
}
