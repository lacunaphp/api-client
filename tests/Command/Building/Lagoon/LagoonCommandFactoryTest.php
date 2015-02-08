<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Lagoon;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Lagoon\LagoonCommandFactory;


class LagoonCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new LagoonCommandFactory('test');
	}
}
