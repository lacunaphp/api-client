<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Shake;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Shake\ShakeCommandFactory;


class ShakeCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new ShakeCommandFactory('test');
	}
}
