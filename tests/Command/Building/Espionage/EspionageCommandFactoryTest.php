<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Espionage;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Espionage\EspionageCommandFactory;


class EspionageCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new EspionageCommandFactory('test');
	}
}
