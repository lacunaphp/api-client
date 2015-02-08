<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Crater;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Crater\CraterCommandFactory;


class CraterCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new CraterCommandFactory('test');
	}
}
