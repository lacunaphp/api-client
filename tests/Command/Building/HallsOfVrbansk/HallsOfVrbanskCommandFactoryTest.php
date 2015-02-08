<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\HallsOfVrbansk;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\HallsOfVrbansk\HallsOfVrbanskCommandFactory;


class HallsOfVrbanskCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new HallsOfVrbanskCommandFactory('test');
	}
}
