<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Pie;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Pie\PieCommandFactory;


class PieCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new PieCommandFactory('test');
	}
}
