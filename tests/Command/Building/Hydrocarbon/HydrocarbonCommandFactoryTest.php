<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Hydrocarbon;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Hydrocarbon\HydrocarbonCommandFactory;


class HydrocarbonCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new HydrocarbonCommandFactory('test');
	}
}
