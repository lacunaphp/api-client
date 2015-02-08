<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Fusion;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Fusion\FusionCommandFactory;


class FusionCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new FusionCommandFactory('test');
	}
}
