<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\WasteSequestration;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\WasteSequestration\WasteSequestrationCommandFactory;


class WasteSequestrationCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new WasteSequestrationCommandFactory('test');
	}
}
