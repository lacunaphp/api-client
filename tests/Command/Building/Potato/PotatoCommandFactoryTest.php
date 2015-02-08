<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Potato;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Potato\PotatoCommandFactory;


class PotatoCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new PotatoCommandFactory('test');
	}
}
