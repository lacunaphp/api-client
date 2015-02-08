<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Observatory;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Observatory\ObservatoryCommandFactory;


class ObservatoryCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new ObservatoryCommandFactory('test');
	}

	public function testGetGetProbedStarsCommand() {
		$this->verifyCommandClass(
			'getprobedstars',
			'LacunaPHP\\APIClient\\Command\\Building\\Observatory\\GetProbedStarsCommand'
		);
	}

	public function testGetAbandonProbeCommand() {
		$this->verifyCommandClass(
			'abandonprobe',
			'LacunaPHP\\APIClient\\Command\\Building\\Observatory\\AbandonProbeCommand'
		);
	}

	public function testGetAbandonAllProbesCommand() {
		$this->verifyCommandClass(
			'abandonallprobes',
			'LacunaPHP\\APIClient\\Command\\Building\\Observatory\\AbandonAllProbesCommand'
		);
	}
}
