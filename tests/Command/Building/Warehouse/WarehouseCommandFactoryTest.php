<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Warehouse;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Warehouse\WarehouseCommandFactory;


class WarehouseCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new WarehouseCommandFactory('test');
	}
}
