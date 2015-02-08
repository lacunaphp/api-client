<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Lapis;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Lapis\LapisCommandFactory;


class LapisCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new LapisCommandFactory('test');
	}
}
