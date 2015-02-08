<?php

namespace LacunaPHP\APIClient\Tests\Command\Stats;

use LacunaPHP\APIClient\Tests\Command\APICommandFactoryTest;
use LacunaPHP\APIClient\Command\Stats\StatsCommandFactory;


class StatsCommandFactoryTest extends APICommandFactoryTest {

	public function setUp() {
		$this->factory = new StatsCommandFactory('test');
	}

	public function testGetAllianceRankCommand() {
		$this->verifyCommandClass(
			'alliancerank',
			'LacunaPHP\\APIClient\\Command\\Stats\\AllianceRankCommand'
		);
	}

	public function testGetColonyRankCommand() {
		$this->verifyCommandClass(
			'colonyrank',
			'LacunaPHP\\APIClient\\Command\\Stats\\ColonyRankCommand'
		);
	}

	public function testGetCreditsCommand() {
		$this->verifyCommandClass(
			'credits',
			'LacunaPHP\\APIClient\\Command\\Stats\\CreditsCommand'
		);
	}

	public function testGetEmpireRankCommand() {
		$this->verifyCommandClass(
			'empirerank',
			'LacunaPHP\\APIClient\\Command\\Stats\\EmpireRankCommand'
		);
	}

	public function testGetFindAllianceRankCommand() {
		$this->verifyCommandClass(
			'findalliancerank',
			'LacunaPHP\\APIClient\\Command\\Stats\\FindAllianceRankCommand'
		);
	}

	public function testGetFindEmpireRankCommand() {
		$this->verifyCommandClass(
			'findempirerank',
			'LacunaPHP\\APIClient\\Command\\Stats\\FindEmpireRankCommand'
		);
	}

	public function testGetSpyRankCommand() {
		$this->verifyCommandClass(
			'spyrank',
			'LacunaPHP\\APIClient\\Command\\Stats\\SpyRankCommand'
		);
	}

	public function testGetWeeklyMedalWinnersCommand() {
		$this->verifyCommandClass(
			'weeklymedalwinners',
			'LacunaPHP\\APIClient\\Command\\Stats\\WeeklyMedalWinnersCommand'
		);
	}
}
