<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\PantheonOfHagness;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\PantheonOfHagness\PantheonOfHagnessCommandFactory;


class PantheonOfHagnessCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new PantheonOfHagnessCommandFactory('test');
	}
}
