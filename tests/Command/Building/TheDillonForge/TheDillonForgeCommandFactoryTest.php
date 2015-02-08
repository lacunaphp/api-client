<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\TheDillonForge;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\TheDillonForge\TheDillonForgeCommandFactory;


class TheDillonForgeCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new TheDillonForgeCommandFactory('test');
	}

	public function testGetMakePlanCommand() {
		$this->verifyCommandClass(
			'makeplan',
			'LacunaPHP\\APIClient\\Command\\Building\\TheDillonForge\\MakePlanCommand'
		);
	}

	public function testGetSplitPlanCommand() {
		$this->verifyCommandClass(
			'splitplan',
			'LacunaPHP\\APIClient\\Command\\Building\\TheDillonForge\\SplitPlanCommand'
		);
	}

	public function testGetSubsidizeCommand() {
		$this->verifyCommandClass(
			'subsidize',
			'LacunaPHP\\APIClient\\Command\\Building\\TheDillonForge\\SubsidizeCommand'
		);
	}
}
