<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\DistributionCenter;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\DistributionCenter\DistributionCenterCommandFactory;


class DistributionCenterCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new DistributionCenterCommandFactory('test');
	}

	public function testGetReserveCommand() {
		$this->verifyCommandClass(
			'reserve',
			'LacunaPHP\\APIClient\\Command\\Building\\DistributionCenter\\ReserveCommand'
		);
	}

	public function testGetReleaseReserveCommand() {
		$this->verifyCommandClass(
			'releasereserve',
			'LacunaPHP\\APIClient\\Command\\Building\\DistributionCenter\\ReleaseReserveCommand'
		);
	}

	public function testGetGetStoredResourcesCommand() {
		$this->verifyCommandClass(
			'getstoredresources',
			'LacunaPHP\\APIClient\\Command\\Building\\DistributionCenter\\GetStoredResourcesCommand'
		);
	}
}
