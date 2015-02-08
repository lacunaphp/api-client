<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Geo;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Geo\GeoCommandFactory;


class GeoCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new GeoCommandFactory('test');
	}
}
