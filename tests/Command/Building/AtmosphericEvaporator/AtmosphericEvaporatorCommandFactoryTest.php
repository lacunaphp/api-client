<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\AtmosphericEvaporator;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\AtmosphericEvaporator\AtmosphericEvaporatorCommandFactory;


class AtmosphericEvaporatorCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new AtmosphericEvaporatorCommandFactory('test');
	}
}
