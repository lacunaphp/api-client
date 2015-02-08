<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Stockpile;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Stockpile\StockpileCommandFactory;


class StockpileCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new StockpileCommandFactory('test');
	}
}
