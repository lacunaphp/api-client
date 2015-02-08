<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\CulinaryInstitute;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\CulinaryInstitute\CulinaryInstituteCommandFactory;


class CulinaryInstituteCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new CulinaryInstituteCommandFactory('test');
	}
}
