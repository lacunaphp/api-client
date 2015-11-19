<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Shipyard;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Shipyard\ShipyardCommandFactory;


class ShipyardCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new ShipyardCommandFactory('test');
	}

	public function testGetViewBuildQueueCommand() {
		$this->verifyCommandClass(
			'viewbuildqueue',
			'LacunaPHP\\APIClient\\Command\\Building\\Shipyard\\ViewBuildQueueCommand'
		);
	}

	public function testGetSubsidizeBuildQueueCommand() {
		$this->verifyCommandClass(
			'subsidizebuildqueue',
			'LacunaPHP\\APIClient\\Command\\Building\\Shipyard\\SubsidizeBuildQueueCommand'
		);
	}

	public function testGetSubsidizeShipCommand() {
		$this->verifyCommandClass(
			'subsidizeship',
			'LacunaPHP\\APIClient\\Command\\Building\\Shipyard\\SubsidizeShipCommand'
		);
	}

	public function testGetGetBuildableCommand() {
		$this->verifyCommandClass(
			'getbuildable',
			'LacunaPHP\\APIClient\\Command\\Building\\Shipyard\\GetBuildableCommand'
		);
	}

	public function testGetBuildShipCommand() {
		$this->verifyCommandClass(
			'buildship',
			'LacunaPHP\\APIClient\\Command\\Building\\Shipyard\\BuildShipCommand'
		);
	}

	public function testGetBuildShipsCommand() {
		$this->verifyCommandClass(
			'buildships',
			'LacunaPHP\\APIClient\\Command\\Building\\Shipyard\\BuildShipsCommand'
		);
	}
}
