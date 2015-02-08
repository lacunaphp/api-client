<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\EnergyReserve;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\EnergyReserve\EnergyReserveCommandFactory;


class EnergyReserveCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new EnergyReserveCommandFactory('test');
	}

	public function testGetDumpCommand() {
		$this->verifyCommandClass(
			'dump',
			'LacunaPHP\\APIClient\\Command\\Building\\EnergyReserve\\DumpCommand'
		);
	}
}
