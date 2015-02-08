<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Ravine;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Ravine\RavineCommandFactory;


class RavineCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new RavineCommandFactory('test');
	}
}
