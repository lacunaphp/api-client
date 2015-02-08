<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Park;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Park\ParkCommandFactory;


class ParkCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new ParkCommandFactory('test');
	}

	public function testGetThrowAPartyCommand() {
		$this->verifyCommandClass(
			'throwaparty',
			'LacunaPHP\\APIClient\\Command\\Building\\Park\\ThrowAPartyCommand'
		);
	}

	public function testGetSubsidizePartyCommand() {
		$this->verifyCommandClass(
			'subsidizeparty',
			'LacunaPHP\\APIClient\\Command\\Building\\Park\\SubsidizePartyCommand'
		);
	}
}
