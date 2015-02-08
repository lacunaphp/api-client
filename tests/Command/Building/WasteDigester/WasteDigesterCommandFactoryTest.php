<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\WasteDigester;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\WasteDigester\WasteDigesterCommandFactory;


class WasteDigesterCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new WasteDigesterCommandFactory('test');
	}
}
