<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\BeeldebanNest;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\BeeldebanNest\BeeldebanNestCommandFactory;


class BeeldebanNestCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new BeeldebanNestCommandFactory('test');
	}
}
