<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Oversight;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Oversight\OversightCommandFactory;


class OversightCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new OversightCommandFactory('test');
	}
}
