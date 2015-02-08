<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\WasteRecycling;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\WasteRecycling\WasteRecyclingCommandFactory;


class WasteRecyclingCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new WasteRecyclingCommandFactory('test');
	}

	public function testGetRecycleCommand() {
		$this->verifyCommandClass(
			'recycle',
			'LacunaPHP\\APIClient\\Command\\Building\\WasteRecycling\\RecycleCommand'
		);
	}

	public function testGetSubsidizeRecyclingCommand() {
		$this->verifyCommandClass(
			'subsidizerecycling',
			'LacunaPHP\\APIClient\\Command\\Building\\WasteRecycling\\SubsidizeRecyclingCommand'
		);
	}
}
