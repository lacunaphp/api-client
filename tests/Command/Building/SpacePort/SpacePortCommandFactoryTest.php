<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SpacePort;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\SpacePort\SpacePortCommandFactory;


class SpacePortCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new SpacePortCommandFactory('test');
	}

	public function testGetViewAllShipsCommand() {
		$this->verifyCommandClass(
			'viewallships',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\ViewAllShipsCommand'
		);
	}
	
	public function testGetViewForeignShipsCommand() {
		$this->verifyCommandClass(
			'viewforeignships',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\ViewForeignShipsCommand'
		);
	}

	public function testGetGetFleetForCommand() {
		$this->verifyCommandClass(
			'getfleetfor',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\GetFleetForCommand'
		);
	}

	public function testGetGetShipsForCommand() {
		$this->verifyCommandClass(
			'getshipsfor',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\GetShipsForCommand'
		);
	}

	public function testGetSendShipCommand() {
		$this->verifyCommandClass(
			'sendship',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\SendShipCommand'
		);
	}

	public function testGetSendShipTypesCommand() {
		$this->verifyCommandClass(
			'sendshiptypes',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\SendShipTypesCommand'
		);
	}

	public function testGetSendFleetCommand() {
		$this->verifyCommandClass(
			'sendfleet',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\SendFleetCommand'
		);
	}

	public function testGetRecallShipCommand() {
		$this->verifyCommandClass(
			'recallship',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\RecallShipCommand'
		);
	}

	public function testGetRecallAllCommand() {
		$this->verifyCommandClass(
			'recallall',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\RecallAllCommand'
		);
	}

	public function testGetNameShipCommand() {
		$this->verifyCommandClass(
			'nameship',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\NameShipCommand'
		);
	}

	public function testGetScuttleShipCommand() {
		$this->verifyCommandClass(
			'scuttleship',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\ScuttleShipCommand'
		);
	}

	public function testGetMassScuttleShipCommand() {
		$this->verifyCommandClass(
			'massscuttleship',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\MassScuttleShipCommand'
		);
	}

	public function testGetViewShipsTravellingCommand() {
		$this->verifyCommandClass(
			'viewshipstravelling',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\ViewShipsTravellingCommand'
		);
	}

	public function testGetViewShipsOrbitingCommand() {
		$this->verifyCommandClass(
			'viewshipsorbiting',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\ViewShipsOrbitingCommand'
		);
	}

	public function testGetPrepareSendSpiesCommand() {
		$this->verifyCommandClass(
			'preparesendspies',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\PrepareSendSpiesCommand'
		);
	}

	public function testGetSendSpiesCommand() {
		$this->verifyCommandClass(
			'sendspies',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\SendSpiesCommand'
		);
	}

	public function testGetPrepareFetchSpiesCommand() {
		$this->verifyCommandClass(
			'preparefetchspies',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\PrepareFetchSpiesCommand'
		);
	}

	public function testGetFetchSpiesCommand() {
		$this->verifyCommandClass(
			'fetchspies',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\FetchSpiesCommand'
		);
	}

	public function testGetViewBattleLogsCommand() {
		$this->verifyCommandClass(
			'viewbattlelogs',
			'LacunaPHP\\APIClient\\Command\\Building\\SpacePort\\ViewBattleLogsCommand'
		);
	}
}
