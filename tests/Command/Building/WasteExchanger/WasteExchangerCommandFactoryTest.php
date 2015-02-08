<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\WasteExchanger;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\WasteExchanger\WasteExchangerCommandFactory;


class WasteExchangerCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new WasteExchangerCommandFactory('test');
	}

	public function testGetRecycleCommand() {
		$this->verifyCommandClass(
			'recycle',
			'LacunaPHP\\APIClient\\Command\\Building\\WasteExchanger\\RecycleCommand'
		);
	}

	public function testGetSubsidizeRecyclingCommand() {
		$this->verifyCommandClass(
			'subsidizerecycling',
			'LacunaPHP\\APIClient\\Command\\Building\\WasteExchanger\\SubsidizeRecyclingCommand'
		);
	}
}
