<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Apple;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Apple\AppleCommandFactory;


class AppleCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new AppleCommandFactory('test');
	}
}
