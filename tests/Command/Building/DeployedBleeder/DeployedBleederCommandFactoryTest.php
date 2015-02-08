<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\DeployedBleeder;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\DeployedBleeder\DeployedBleederCommandFactory;


class DeployedBleederCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new DeployedBleederCommandFactory('test');
	}
}
