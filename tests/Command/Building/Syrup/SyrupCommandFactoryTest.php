<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Syrup;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Syrup\SyrupCommandFactory;


class SyrupCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new SyrupCommandFactory('test');
	}
}
