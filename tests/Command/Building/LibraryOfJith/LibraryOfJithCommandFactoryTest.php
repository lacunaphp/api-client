<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\LibraryOfJith;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\LibraryOfJith\LibraryOfJithCommandFactory;


class LibraryOfJithCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new LibraryOfJithCommandFactory('test');
	}

	public function testGetResearchSpeciesCommand() {
		$this->verifyCommandClass(
			'researchspecies',
			'LacunaPHP\\APIClient\\Command\\Building\\LibraryOfJith\\ResearchSpeciesCommand'
		);
	}
}
