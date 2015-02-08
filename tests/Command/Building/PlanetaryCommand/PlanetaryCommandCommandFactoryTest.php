<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\PlanetaryCommand;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\PlanetaryCommand\PlanetaryCommandCommandFactory;


class PlanetaryCommandCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new PlanetaryCommandCommandFactory('test');
	}

	public function testGetViewPlansCommand() {
		$this->verifyCommandClass(
			'viewplans',
			'LacunaPHP\\APIClient\\Command\\Building\\PlanetaryCommand\\ViewPlansCommand'
		);
	}

	public function testGetViewIncomingSupplyChainsCommand() {
		$this->verifyCommandClass(
			'viewincomingsupplychains',
			'LacunaPHP\\APIClient\\Command\\Building\\PlanetaryCommand\\ViewIncomingSupplyChainsCommand'
		);
	}

	public function testGetSubsidizePodCooldownCommand() {
		$this->verifyCommandClass(
			'subsidizepodcooldown',
			'LacunaPHP\\APIClient\\Command\\Building\\PlanetaryCommand\\SubsidizePodCooldownCommand'
		);
	}
}
