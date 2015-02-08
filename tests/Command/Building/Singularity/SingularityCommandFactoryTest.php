<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Singularity;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Singularity\SingularityCommandFactory;


class SingularityCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new SingularityCommandFactory('test');
	}
}
