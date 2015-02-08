<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Propulsion;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Propulsion\PropulsionCommandFactory;


class PropulsionCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new PropulsionCommandFactory('test');
	}
}
