<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SpaceJunkPark;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\SpaceJunkPark\SpaceJunkParkCommandFactory;


class SpaceJunkParkCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new SpaceJunkParkCommandFactory('test');
	}
}
