<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Fission;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Fission\FissionCommandFactory;


class FissionCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new FissionCommandFactory('test');
	}
}
