<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Sand;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Sand\SandCommandFactory;


class SandCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new SandCommandFactory('test');
	}
}
