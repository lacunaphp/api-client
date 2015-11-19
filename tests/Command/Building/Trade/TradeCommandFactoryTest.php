<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Trade;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Trade\TradeCommandFactory;


class TradeCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new TradeCommandFactory('test');
	}

	public function testGetAddToMarketCommand() {
		$this->verifyCommandClass(
			'addtomarket',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\AddToMarketCommand'
		);
	}

	public function testGetGetShipsCommand() {
		$this->verifyCommandClass(
			'getships',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\GetShipsCommand'
		);
	}

	public function testGetGetShipSummaryCommandCommand() {
		$this->verifyCommandClass(
			'getshipsummary',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\GetShipSummaryCommand'
		);
	}

	public function testGetGetPrisonersCommand() {
		$this->verifyCommandClass(
			'getprisoners',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\GetPrisonersCommand'
		);
	}

	public function testGetGetPlanSummaryCommand() {
		$this->verifyCommandClass(
			'getplansummary',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\GetPlanSummaryCommand'
		);
	}

	public function testGetGetGlyphSummaryCommand() {
		$this->verifyCommandClass(
			'getglyphsummary',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\GetGlyphSummaryCommand'
		);
	}

	public function testGetWithdrawFromMarketCommand() {
		$this->verifyCommandClass(
			'withdrawfrommarket',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\WithdrawFromMarketCommand'
		);
	}

	public function testGetAcceptFromMarketCommand() {
		$this->verifyCommandClass(
			'acceptfrommarket',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\AcceptFromMarketCommand'
		);
	}

	public function testGetViewMarketCommand() {
		$this->verifyCommandClass(
			'viewmarket',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\ViewMarketCommand'
		);
	}

	public function testGetViewMyMarketCommand() {
		$this->verifyCommandClass(
			'viewmymarket',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\ViewMyMarketCommand'
		);
	}

	public function testGetGetTradeShipsCommand() {
		$this->verifyCommandClass(
			'gettradeships',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\GetTradeShipsCommand'
		);
	}

	public function testGetGetWasteShipsCommand() {
		$this->verifyCommandClass(
			'getwasteships',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\GetWasteShipsCommand'
		);
	}

	public function testGetGetSupplyShipsCommand() {
		$this->verifyCommandClass(
			'getsupplyships',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\GetSupplyShipsCommand'
		);
	}

	public function testGetViewSupplyChainsCommand() {
		$this->verifyCommandClass(
			'viewsupplychains',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\ViewSupplyChainsCommand'
		);
	}

	public function testGetViewWasteChainsCommand() {
		$this->verifyCommandClass(
			'viewwastechains',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\ViewWasteChainsCommand'
		);
	}

	public function testGetCreateSupplyChainCommand() {
		$this->verifyCommandClass(
			'createsupplychain',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\CreateSupplyChainCommand'
		);
	}

	public function testGetDeleteSupplyChainCommand() {
		$this->verifyCommandClass(
			'deletesupplychain',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\DeleteSupplyChainCommand'
		);
	}

	public function testGetUpdateSupplyChainCommand() {
		$this->verifyCommandClass(
			'updatesupplychain',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\UpdateSupplyChainCommand'
		);
	}

	public function testGetUpdateWasteChainCommand() {
		$this->verifyCommandClass(
			'updatewastechain',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\UpdateWasteChainCommand'
		);
	}

	public function testGetAddSupplyShipToFleetCommand() {
		$this->verifyCommandClass(
			'addsupplyshiptofleet',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\AddSupplyShipToFleetCommand'
		);
	}

	public function testGetAddWasteShipToFleetCommand() {
		$this->verifyCommandClass(
			'addwasteshiptofleet',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\AddWasteShipToFleetCommand'
		);
	}

	public function testGetRemoveSupplyShipFromFleetCommand() {
		$this->verifyCommandClass(
			'removesupplyshipfromfleet',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\RemoveSupplyShipFromFleetCommand'
		);
	}

	public function testGetRemoveWasteShipFromFleetCommand() {
		$this->verifyCommandClass(
			'removewasteshipfromfleet',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\RemoveWasteShipFromFleetCommand'
		);
	}

	public function testGetGetStoredResourcesCommand() {
		$this->verifyCommandClass(
			'getstoredresources',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\GetStoredResourcesCommand'
		);
	}

	public function testGetPushItemsCommand() {
		$this->verifyCommandClass(
			'pushitems',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\PushItemsCommand'
		);
	}

	public function testGetReportAbuseCommand() {
		$this->verifyCommandClass(
			'reportabuse',
			'LacunaPHP\\APIClient\\Command\\Building\\Trade\\ReportAbuseCommand'
		);
	}
}
