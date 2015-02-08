<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\ArtMuseum;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\ArtMuseum\ArtMuseumCommandFactory;


class ArtMuseumCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new ArtMuseumCommandFactory('test');
	}
}
