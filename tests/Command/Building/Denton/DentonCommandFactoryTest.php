<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Denton;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Denton\DentonCommandFactory;


class DentonCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new DentonCommandFactory('test');
	}
}
