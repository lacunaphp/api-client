<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Network19;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Network19\Network19CommandFactory;


class Network19CommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new Network19CommandFactory('test');
	}

	public function testGetRestrictCoverageCommand() {
		$this->verifyCommandClass(
			'restrictcoverage',
			'LacunaPHP\\APIClient\\Command\\Building\\Network19\\RestrictCoverageCommand'
		);
	}

	public function testGetViewNewsCommand() {
		$this->verifyCommandClass(
			'viewnews',
			'LacunaPHP\\APIClient\\Command\\Building\\Network19\\ViewNewsCommand'
		);
	}
}
