<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Volcano;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Volcano\VolcanoCommandFactory;


class VolcanoCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new VolcanoCommandFactory('test');
	}
}
