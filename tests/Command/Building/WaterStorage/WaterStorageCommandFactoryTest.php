<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\WaterStorage;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\WaterStorage\WaterStorageCommandFactory;


class WaterStorageCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new WaterStorageCommandFactory('test');
	}

	public function testGetDumpCommand() {
		$this->verifyCommandClass(
			'dump',
			'LacunaPHP\\APIClient\\Command\\Building\\WaterStorage\\DumpCommand'
		);
	}
}
