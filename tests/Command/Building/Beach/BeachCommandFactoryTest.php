<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Beach;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Beach\BeachCommandFactory;


class BeachCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new BeachCommandFactory('test');
	}
}
