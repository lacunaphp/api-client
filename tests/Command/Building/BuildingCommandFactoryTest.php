<?php

namespace LacunaPHP\APIClient\Tests\Command\Building;

use LacunaPHP\APIClient\Tests\Command\APICommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;

class BuildingCommandFactoryTest extends APICommandFactoryTest {

	public function setUp() {
		$this->factory = new BuildingCommandFactory('test');
	}

	public function testGetBuildCommand() {
		$command = $this->factory->getCommand('build');

		$this->assertInstanceOf(
			'LacunaPHP\\APIClient\\Command\\Building\\BuildCommand',
			$command
		);
	}

	public function testGetDemolishCommand() {
		$command = $this->factory->getCommand('demolish');

		$this->assertInstanceOf(
			'LacunaPHP\\APIClient\\Command\\Building\\DemolishCommand',
			$command
		);
	}

	public function testGetDowngradeCommand() {
		$command = $this->factory->getCommand('downgrade');

		$this->assertInstanceOf(
			'LacunaPHP\\APIClient\\Command\\Building\\DowngradeCommand',
			$command
		);
	}

	public function testGetGetStatsForLevelCommand() {
		$command = $this->factory->getCommand('getstatsforlevel');

		$this->assertInstanceOf(
			'LacunaPHP\\APIClient\\Command\\Building\\GetStatsForLevelCommand',
			$command
		);
	}

	public function testGetRepairCommand() {
		$command = $this->factory->getCommand('repair');

		$this->assertInstanceOf(
			'LacunaPHP\\APIClient\\Command\\Building\\RepairCommand',
			$command
		);
	}

	public function testGetUpgradeCommand() {
		$command = $this->factory->getCommand('upgrade');

		$this->assertInstanceOf(
			'LacunaPHP\\APIClient\\Command\\Building\\UpgradeCommand',
			$command
		);
	}

	public function testGetViewCommand() {
		$command = $this->factory->getCommand('view');

		$this->assertInstanceOf(
			'LacunaPHP\\APIClient\\Command\\Building\\ViewCommand',
			$command
		);
	}
}
