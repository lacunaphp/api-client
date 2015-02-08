<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Soup;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Soup\SoupCommandFactory;


class SoupCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new SoupCommandFactory('test');
	}
}
