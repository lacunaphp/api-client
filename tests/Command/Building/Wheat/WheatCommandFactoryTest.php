<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Wheat;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Wheat\WheatCommandFactory;


class WheatCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new WheatCommandFactory('test');
	}
}
