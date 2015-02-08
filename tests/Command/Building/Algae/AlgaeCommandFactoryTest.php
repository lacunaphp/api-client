<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Algae;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Algae\AlgaeCommandFactory;


class AlgaeCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new AlgaeCommandFactory('test');
	}
}
