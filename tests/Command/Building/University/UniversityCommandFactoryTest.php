<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\University;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\University\UniversityCommandFactory;


class UniversityCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new UniversityCommandFactory('test');
	}
}
