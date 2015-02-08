<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\CitadelOfKnope;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\CitadelOfKnope\CitadelOfKnopeCommandFactory;


class CitadelOfKnopeCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new CitadelOfKnopeCommandFactory('test');
	}
}
