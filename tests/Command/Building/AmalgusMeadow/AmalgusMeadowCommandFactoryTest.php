<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\AmalgusMeadow;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\AmalgusMeadow\AmalgusMeadowCommandFactory;


class AmalgusMeadowCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new AmalgusMeadowCommandFactory('test');
	}
}
