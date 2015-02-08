<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\OperaHouse;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\OperaHouse\OperaHouseCommandFactory;


class OperaHouseCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new OperaHouseCommandFactory('test');
	}
}
