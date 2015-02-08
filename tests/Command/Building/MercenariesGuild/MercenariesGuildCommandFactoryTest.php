<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MercenariesGuild;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\MercenariesGuild\MercenariesGuildCommandFactory;


class MercenariesGuildCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new MercenariesGuildCommandFactory('test');
	}

	public function testGetAddToMarketCommand() {
		$this->verifyCommandClass(
			'addtomarket',
			'LacunaPHP\\APIClient\\Command\\Building\\MercenariesGuild\\AddToMarketCommand'
		);
	}

	public function testGetGetSpiesCommand() {
		$this->verifyCommandClass(
			'getspies',
			'LacunaPHP\\APIClient\\Command\\Building\\MercenariesGuild\\GetSpiesCommand'
		);
	}

	public function testGetWithdrawFromMarketCommand() {
		$this->verifyCommandClass(
			'withdrawfrommarket',
			'LacunaPHP\\APIClient\\Command\\Building\\MercenariesGuild\\WithdrawFromMarketCommand'
		);
	}

	public function testGetAcceptFromMarketCommand() {
		$this->verifyCommandClass(
			'acceptfrommarket',
			'LacunaPHP\\APIClient\\Command\\Building\\MercenariesGuild\\AcceptFromMarketCommand'
		);
	}

	public function testGetViewMarketCommand() {
		$this->verifyCommandClass(
			'viewmarket',
			'LacunaPHP\\APIClient\\Command\\Building\\MercenariesGuild\\ViewMarketCommand'
		);
	}

	public function testGetViewMyMarketCommand() {
		$this->verifyCommandClass(
			'viewmymarket',
			'LacunaPHP\\APIClient\\Command\\Building\\MercenariesGuild\\ViewMyMarketCommand'
		);
	}

	public function testGetGetTradeShipsCommand() {
		$this->verifyCommandClass(
			'gettradeships',
			'LacunaPHP\\APIClient\\Command\\Building\\MercenariesGuild\\GetTradeShipsCommand'
		);
	}

	public function testGetReportAbuseCommand() {
		$this->verifyCommandClass(
			'reportabuse',
			'LacunaPHP\\APIClient\\Command\\Building\\MercenariesGuild\\ReportAbuseCommand'
		);
	}
}
