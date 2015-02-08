<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Transporter;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Transporter\TransporterCommandFactory;


class TransporterCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new TransporterCommandFactory('test');
	}

	public function testGetAddToMarketCommand() {
		$this->verifyCommandClass(
			'addtomarket',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\AddToMarketCommand'
		);
	}

	public function testGetGetShipsCommand() {
		$this->verifyCommandClass(
			'getships',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\GetShipsCommand'
		);
	}

	public function testGetGetPrisonersCommand() {
		$this->verifyCommandClass(
			'getprisoners',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\GetPrisonersCommand'
		);
	}

	public function testGetGetPlanSummaryCommand() {
		$this->verifyCommandClass(
			'getplansummary',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\GetPlanSummaryCommand'
		);
	}

	public function testGetGetGlyphSummaryCommand() {
		$this->verifyCommandClass(
			'getglyphsummary',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\GetGlyphSummaryCommand'
		);
	}

	public function testGetWithdrawFromMarketCommand() {
		$this->verifyCommandClass(
			'withdrawfrommarket',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\WithdrawFromMarketCommand'
		);
	}

	public function testGetAcceptFromMarketCommand() {
		$this->verifyCommandClass(
			'acceptfrommarket',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\AcceptFromMarketCommand'
		);
	}

	public function testGetViewMarketCommand() {
		$this->verifyCommandClass(
			'viewmarket',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\ViewMarketCommand'
		);
	}

	public function testGetViewMyMarketCommand() {
		$this->verifyCommandClass(
			'viewmymarket',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\ViewMyMarketCommand'
		);
	}

	public function testGetGetStoredResourcesCommand() {
		$this->verifyCommandClass(
			'getstoredresources',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\GetStoredResourcesCommand'
		);
	}

	public function testGetPushItemsCommand() {
		$this->verifyCommandClass(
			'pushitems',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\PushItemsCommand'
		);
	}

	public function testGetTradeOneForOneCommand() {
		$this->verifyCommandClass(
			'tradeoneforone',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\TradeOneForOneCommand'
		);
	}

	public function testGetReportAbuseCommand() {
		$this->verifyCommandClass(
			'reportabuse',
			'LacunaPHP\\APIClient\\Command\\Building\\Transporter\\ReportAbuseCommand'
		);
	}
}
