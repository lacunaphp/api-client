<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\GasGiantPlatform;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\GasGiantPlatform\GasGiantPlatformCommandFactory;


class GasGiantPlatformCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new GasGiantPlatformCommandFactory('test');
	}
}
