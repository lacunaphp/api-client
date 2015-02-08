<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\AlgaePond;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\AlgaePond\AlgaePondCommandFactory;


class AlgaePondCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new AlgaePondCommandFactory('test');
	}
}
