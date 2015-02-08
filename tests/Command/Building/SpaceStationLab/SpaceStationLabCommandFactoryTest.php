<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SpaceStationLab;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\SpaceStationLab\SpaceStationLabCommandFactory;


class SpaceStationLabCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new SpaceStationLabCommandFactory('test');
	}

	public function testGetMakePlanCommand() {
		$this->verifyCommandClass(
			'makeplan',
			'LacunaPHP\\APIClient\\Command\\Building\\SpaceStationLab\\MakePlanCommand'
		);
	}

	public function testGetSubsidizePlanCommand() {
		$this->verifyCommandClass(
			'subsidizeplan',
			'LacunaPHP\\APIClient\\Command\\Building\\SpaceStationLab\\SubsidizePlanCommand'
		);
	}
}
