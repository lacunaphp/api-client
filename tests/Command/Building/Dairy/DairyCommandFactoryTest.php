<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Dairy;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Dairy\DairyCommandFactory;


class DairyCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new DairyCommandFactory('test');
	}
}
