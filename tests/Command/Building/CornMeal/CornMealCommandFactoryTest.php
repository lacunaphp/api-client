<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\CornMeal;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\CornMeal\CornMealCommandFactory;


class CornMealCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new CornMealCommandFactory('test');
	}
}
