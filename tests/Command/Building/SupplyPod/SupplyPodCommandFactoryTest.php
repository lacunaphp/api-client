<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SupplyPod;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\SupplyPod\SupplyPodCommandFactory;


class SupplyPodCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new SupplyPodCommandFactory('test');
	}
}
