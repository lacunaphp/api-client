<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\BlackHoleGenerator;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\BlackHoleGenerator\BlackHoleGeneratorCommandFactory;


class BlackHoleGeneratorCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new BlackHoleGeneratorCommandFactory('test');
	}

	public function testGetGenerateSingularityCommand() {
		$this->verifyCommandClass(
			'generatesingularity',
			'LacunaPHP\\APIClient\\Command\\Building\\BlackHoleGenerator\\GenerateSingularityCommand'
		);
	}

	public function testGetGetActionsForCommand() {
		$this->verifyCommandClass(
			'getactionsfor',
			'LacunaPHP\\APIClient\\Command\\Building\\BlackHoleGenerator\\GetActionsForCommand'
		);
	}

	public function testGetSubsidizeCooldownCommand() {
		$this->verifyCommandClass(
			'subsidizecooldown',
			'LacunaPHP\\APIClient\\Command\\Building\\BlackHoleGenerator\\SubsidizeCooldownCommand'
		);
	}
}
