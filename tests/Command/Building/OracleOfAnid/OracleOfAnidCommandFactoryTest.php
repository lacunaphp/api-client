<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\OracleOfAnid;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\OracleOfAnid\OracleOfAnidCommandFactory;


class OracleOfAnidCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new OracleOfAnidCommandFactory('test');
	}

	public function testGetGetStarCommand() {
		$this->verifyCommandClass(
			'getstar',
			'LacunaPHP\\APIClient\\Command\\Building\\OracleOfAnid\\GetStarCommand'
		);
	}

	public function testGetGetProbedStarsCommand() {
		$this->verifyCommandClass(
			'getprobedstars',
			'LacunaPHP\\APIClient\\Command\\Building\\OracleOfAnid\\GetProbedStarsCommand'
		);
	}
}
