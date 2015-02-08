<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Mine;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Mine\MineCommandFactory;


class MineCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new MineCommandFactory('test');
	}
}
