<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\DentonBrambles;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\DentonBrambles\DentonBramblesCommandFactory;


class DentonBramblesCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new DentonBramblesCommandFactory('test');
	}
}
