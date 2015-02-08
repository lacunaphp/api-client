<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Pancake;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Pancake\PancakeCommandFactory;


class PancakeCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new PancakeCommandFactory('test');
	}
}
