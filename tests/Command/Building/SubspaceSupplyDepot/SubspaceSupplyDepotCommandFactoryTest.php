<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SubspaceSupplyDepot;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\SubspaceSupplyDepot\SubspaceSupplyDepotCommandFactory;


class SubspaceSupplyDepotCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new SubspaceSupplyDepotCommandFactory('test');
	}

	public function testGetTransmitFoodCommand() {
		$this->verifyCommandClass(
			'transmitfood',
			'LacunaPHP\\APIClient\\Command\\Building\\SubspaceSupplyDepot\\TransmitFoodCommand'
		);
	}

	public function testGetTransmitEnergyCommand() {
		$this->verifyCommandClass(
			'transmitenergy',
			'LacunaPHP\\APIClient\\Command\\Building\\SubspaceSupplyDepot\\TransmitEnergyCommand'
		);
	}

	public function testGetTransmitOreCommand() {
		$this->verifyCommandClass(
			'transmitore',
			'LacunaPHP\\APIClient\\Command\\Building\\SubspaceSupplyDepot\\TransmitOreCommand'
		);
	}

	public function testGetTransmitWaterCommand() {
		$this->verifyCommandClass(
			'transmitwater',
			'LacunaPHP\\APIClient\\Command\\Building\\SubspaceSupplyDepot\\TransmitWaterCommand'
		);
	}

	public function testGetCompleteBuildQueueCommand() {
		$this->verifyCommandClass(
			'completebuildqueue',
			'LacunaPHP\\APIClient\\Command\\Building\\SubspaceSupplyDepot\\CompleteBuildQueueCommand'
		);
	}
}
