<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MiningMinistry;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\MiningMinistry\MiningMinistryCommandFactory;


class MiningMinistryCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new MiningMinistryCommandFactory('test');
	}

	public function testGetViewPlatformsCommand() {
		$this->verifyCommandClass(
			'viewplatforms',
			'LacunaPHP\\APIClient\\Command\\Building\\MiningMinistry\\ViewPlatformsCommand'
		);
	}

	public function testGetViewShipsCommand() {
		$this->verifyCommandClass(
			'viewships',
			'LacunaPHP\\APIClient\\Command\\Building\\MiningMinistry\\ViewShipsCommand'
		);
	}

	public function testGetAddCargoShipToFleetCommand() {
		$this->verifyCommandClass(
			'addcargoshiptofleet',
			'LacunaPHP\\APIClient\\Command\\Building\\MiningMinistry\\AddCargoShipToFleetCommand'
		);
	}

	public function testGetRemoveCargoShipFromFleetCommand() {
		$this->verifyCommandClass(
			'removecargoshipfromfleet',
			'LacunaPHP\\APIClient\\Command\\Building\\MiningMinistry\\RemoveCargoShipFromFleetCommand'
		);
	}

	public function testGetAbandonPlatformCommand() {
		$this->verifyCommandClass(
			'abandonplatform',
			'LacunaPHP\\APIClient\\Command\\Building\\MiningMinistry\\AbandonPlatformCommand'
		);
	}

	public function testGetMassAbandonPlatformCommand() {
		$this->verifyCommandClass(
			'massabandonplatform',
			'LacunaPHP\\APIClient\\Command\\Building\\MiningMinistry\\MassAbandonPlatformCommand'
		);
	}
}
