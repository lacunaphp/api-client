<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Malcud;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Malcud\MalcudCommandFactory;


class MalcudCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new MalcudCommandFactory('test');
	}
}
