<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\FoodReserve;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\FoodReserve\FoodReserveCommandFactory;


class FoodReserveCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new FoodReserveCommandFactory('test');
	}

	public function testGetDumpCommand() {
		$this->verifyCommandClass(
			'dump',
			'LacunaPHP\\APIClient\\Command\\Building\\FoodReserve\\DumpCommand'
		);
	}
}
