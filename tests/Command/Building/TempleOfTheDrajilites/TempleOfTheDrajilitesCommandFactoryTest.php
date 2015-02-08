<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\TempleOfTheDrajilites;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\TempleOfTheDrajilites\TempleOfTheDrajilitesCommandFactory;


class TempleOfTheDrajilitesCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new TempleOfTheDrajilitesCommandFactory('test');
	}

	public function testGetListPlanetsCommand() {
		$this->verifyCommandClass(
			'listplanets',
			'LacunaPHP\\APIClient\\Command\\Building\\TempleOfTheDrajilites\\ListPlanetsCommand'
		);
	}

	public function testGetViewPlanetCommand() {
		$this->verifyCommandClass(
			'viewplanet',
			'LacunaPHP\\APIClient\\Command\\Building\\TempleOfTheDrajilites\\ViewPlanetCommand'
		);
	}
}
