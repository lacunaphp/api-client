<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Burger;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Burger\BurgerCommandFactory;


class BurgerCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new BurgerCommandFactory('test');
	}
}
