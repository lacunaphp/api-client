<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Entertainment;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Entertainment\EntertainmentCommandFactory;


class EntertainmentCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new EntertainmentCommandFactory('test');
	}

	public function testGetGetLotteryVotingOptionsCommand() {
		$this->verifyCommandClass(
			'getlotteryvotingoptions',
			'LacunaPHP\\APIClient\\Command\\Building\\Entertainment\\GetLotteryVotingOptionsCommand'
		);
	}

	public function testGetDuckQuackCommand() {
		$this->verifyCommandClass(
			'duckquack',
			'LacunaPHP\\APIClient\\Command\\Building\\Entertainment\\DuckQuackCommand'
		);
	}
}
