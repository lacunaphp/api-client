<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\InterDimensionalRift;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\InterDimensionalRift\InterDimensionalRiftCommandFactory;


class InterDimensionalRiftCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new InterDimensionalRiftCommandFactory('test');
	}
}
