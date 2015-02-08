<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Development;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Development\DevelopmentCommandFactory;


class DevelopmentCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new DevelopmentCommandFactory('test');
	}

	public function testGetSubsidizeBuildQueueCommand() {
		$this->verifyCommandClass(
			'subsidizebuildqueue',
			'LacunaPHP\\APIClient\\Command\\Building\\Development\\SubsidizeBuildQueueCommand'
		);
	}

	public function testGetSubsidizeOneBuildCommand() {
		$this->verifyCommandClass(
			'subsidizeonebuild',
			'LacunaPHP\\APIClient\\Command\\Building\\Development\\SubsidizeOneBuildCommand'
		);
	}

	public function testGetCancelBuildCommand() {
		$this->verifyCommandClass(
			'cancelbuild',
			'LacunaPHP\\APIClient\\Command\\Building\\Development\\CancelBuildCommand'
		);
	}
}
