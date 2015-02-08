<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\GasGiantLab;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\GasGiantLab\GasGiantLabCommandFactory;


class GasGiantLabCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new GasGiantLabCommandFactory('test');
	}
}
