<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\PoliceStation;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\PoliceStation\PoliceStationCommandFactory;


class PoliceStationCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new PoliceStationCommandFactory('test');
	}

	public function testGetViewPrisonersCommand() {
		$this->verifyCommandClass(
			'viewprisoners',
			'LacunaPHP\\APIClient\\Command\\Building\\PoliceStation\\ViewPrisonersCommand'
		);
	}

	public function testGetExecutePrisonerCommand() {
		$this->verifyCommandClass(
			'executeprisoner',
			'LacunaPHP\\APIClient\\Command\\Building\\PoliceStation\\ExecutePrisonerCommand'
		);
	}

	public function testGetReleasePrisonerCommand() {
		$this->verifyCommandClass(
			'releaseprisoner',
			'LacunaPHP\\APIClient\\Command\\Building\\PoliceStation\\ReleasePrisonerCommand'
		);
	}

	public function testGetViewForeignSpiesCommand() {
		$this->verifyCommandClass(
			'viewforeignspies',
			'LacunaPHP\\APIClient\\Command\\Building\\PoliceStation\\ViewForeignSpiesCommand'
		);
	}

	public function testGetViewForeignShipsCommand() {
		$this->verifyCommandClass(
			'viewforeignships',
			'LacunaPHP\\APIClient\\Command\\Building\\PoliceStation\\ViewForeignShipsCommand'
		);
	}

	public function testGetViewShipsTravellingCommand() {
		$this->verifyCommandClass(
			'viewshipstravelling',
			'LacunaPHP\\APIClient\\Command\\Building\\PoliceStation\\ViewShipsTravellingCommand'
		);
	}

	public function testGetViewShipsOrbitingCommand() {
		$this->verifyCommandClass(
			'viewshipsorbiting',
			'LacunaPHP\\APIClient\\Command\\Building\\PoliceStation\\ViewShipsOrbitingCommand'
		);
	}
}
