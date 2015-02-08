<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\LapisForest;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\LapisForest\LapisForestCommandFactory;


class LapisForestCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new LapisForestCommandFactory('test');
	}
}
