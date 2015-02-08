<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\StationCommand;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\StationCommand\StationCommandCommandFactory;


class StationCommandCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new StationCommandCommandFactory('test');
	}
	
	public function testGetViewPlansCommand() {
		$this->verifyCommandClass(
			'viewplans',
			'LacunaPHP\\APIClient\\Command\\Building\\StationCommand\\ViewPlansCommand'
		);
	}

	public function testGetViewIncomingSupplyChainsCommand() {
		$this->verifyCommandClass(
			'viewincomingsupplychains',
			'LacunaPHP\\APIClient\\Command\\Building\\StationCommand\\ViewIncomingSupplyChainsCommand'
		);
	}
}
