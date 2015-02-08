<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\CloakingLab;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\CloakingLab\CloakingLabCommandFactory;


class CloakingLabCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new CloakingLabCommandFactory('test');
	}
}
