<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\NaturalSpring;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\NaturalSpring\NaturalSpringCommandFactory;


class NaturalSpringCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new NaturalSpringCommandFactory('test');
	}
}
