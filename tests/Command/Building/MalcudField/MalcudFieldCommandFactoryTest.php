<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MalcudField;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\MalcudField\MalcudFieldCommandFactory;


class MalcudFieldCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new MalcudFieldCommandFactory('test');
	}
}
