<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Grove;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Grove\GroveCommandFactory;


class GroveCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new GroveCommandFactory('test');
	}
}
