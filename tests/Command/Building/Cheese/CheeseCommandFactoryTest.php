<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Cheese;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Cheese\CheeseCommandFactory;


class CheeseCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new CheeseCommandFactory('test');
	}
}
