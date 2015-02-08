<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SAW;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\SAW\SAWCommandFactory;


class SAWCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new SAWCommandFactory('test');
	}
}
