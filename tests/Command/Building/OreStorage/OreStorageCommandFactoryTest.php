<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\OreStorage;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\OreStorage\OreStorageCommandFactory;


class OreStorageCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new OreStorageCommandFactory('test');
	}

	public function testGetDumpCommand() {
		$this->verifyCommandClass(
			'dump',
			'LacunaPHP\\APIClient\\Command\\Building\\OreStorage\\DumpCommand'
		);
	}
}
