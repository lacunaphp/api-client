<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Bread;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Bread\BreadCommandFactory;


class BreadCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new BreadCommandFactory('test');
	}
}
