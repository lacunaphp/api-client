<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Fissure;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Fissure\FissureCommandFactory;


class FissureCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new FissureCommandFactory('test');
	}
}
