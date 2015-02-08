<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MissionCommand;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\MissionCommand\MissionCommandCommandFactory;


class MissionCommandCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new MissionCommandCommandFactory('test');
	}

	public function testGetGetMissionsCommand() {
		$this->verifyCommandClass(
			'getmissions',
			'LacunaPHP\\APIClient\\Command\\Building\\MissionCommand\\GetMissionsCommand'
		);
	}

	public function testGetCompleteMissionCommand() {
		$this->verifyCommandClass(
			'completemission',
			'LacunaPHP\\APIClient\\Command\\Building\\MissionCommand\\CompleteMissionCommand'
		);
	}

	public function testGetSkipMissionCommand() {
		$this->verifyCommandClass(
			'skipmission',
			'LacunaPHP\\APIClient\\Command\\Building\\MissionCommand\\SkipMissionCommand'
		);
	}
}
