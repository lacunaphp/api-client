<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Bean;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Bean\BeanCommandFactory;


class BeanCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new BeanCommandFactory('test');
	}
}
