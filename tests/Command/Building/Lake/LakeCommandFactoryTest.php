<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Lake;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Lake\LakeCommandFactory;


class LakeCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new LakeCommandFactory('test');
	}
}
