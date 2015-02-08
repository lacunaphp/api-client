<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Intelligence;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Intelligence\IntelligenceCommandFactory;


class IntelligenceCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new IntelligenceCommandFactory('test');
	}

	public function testGetTrainSpyCommand() {
		$this->verifyCommandClass(
			'trainspy',
			'LacunaPHP\\APIClient\\Command\\Building\\Intelligence\\TrainSpyCommand'
		);
	}

	public function testGetViewSpiesCommand() {
		$this->verifyCommandClass(
			'viewspies',
			'LacunaPHP\\APIClient\\Command\\Building\\Intelligence\\ViewSpiesCommand'
		);
	}

	public function testGetViewAllSpiesCommand() {
		$this->verifyCommandClass(
			'viewallspies',
			'LacunaPHP\\APIClient\\Command\\Building\\Intelligence\\ViewAllSpiesCommand'
		);
	}

	public function testGetSubsidizeTrainingCommand() {
		$this->verifyCommandClass(
			'subsidizetraining',
			'LacunaPHP\\APIClient\\Command\\Building\\Intelligence\\SubsidizeTrainingCommand'
		);
	}

	public function testGetBurnSpyCommand() {
		$this->verifyCommandClass(
			'burnspy',
			'LacunaPHP\\APIClient\\Command\\Building\\Intelligence\\BurnSpyCommand'
		);
	}

	public function testGetNameSpyCommand() {
		$this->verifyCommandClass(
			'namespy',
			'LacunaPHP\\APIClient\\Command\\Building\\Intelligence\\NameSpyCommand'
		);
	}

	public function testGetAssignSpyCommand() {
		$this->verifyCommandClass(
			'assignspy',
			'LacunaPHP\\APIClient\\Command\\Building\\Intelligence\\AssignSpyCommand'
		);
	}
}
