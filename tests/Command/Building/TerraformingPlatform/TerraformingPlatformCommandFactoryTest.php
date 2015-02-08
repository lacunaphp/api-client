<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\TerraformingPlatform;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\TerraformingPlatform\TerraformingPlatformCommandFactory;


class TerraformingPlatformCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new TerraformingPlatformCommandFactory('test');
	}
}
