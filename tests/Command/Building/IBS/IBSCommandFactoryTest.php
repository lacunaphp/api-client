<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\IBS;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\IBS\IBSCommandFactory;


class IBSCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new IBSCommandFactory('test');
	}
}
