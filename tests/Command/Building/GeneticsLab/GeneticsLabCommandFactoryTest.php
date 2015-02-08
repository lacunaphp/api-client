<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\GeneticsLab;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\GeneticsLab\GeneticsLabCommandFactory;


class GeneticsLabCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new GeneticsLabCommandFactory('test');
	}

	public function testGetPrepareExperimentCommand() {
		$this->verifyCommandClass(
			'prepareexperiment',
			'LacunaPHP\\APIClient\\Command\\Building\\GeneticsLab\\PrepareExperimentCommand'
		);
	}

	public function testGetRunExperimentCommand() {
		$this->verifyCommandClass(
			'runexperiment',
			'LacunaPHP\\APIClient\\Command\\Building\\GeneticsLab\\RunExperimentCommand'
		);
	}

	public function testGetRenameSpeciesCommand() {
		$this->verifyCommandClass(
			'renamespecies',
			'LacunaPHP\\APIClient\\Command\\Building\\GeneticsLab\\RenameSpeciesCommand'
		);
	}
}
