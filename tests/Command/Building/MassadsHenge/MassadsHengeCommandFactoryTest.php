<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MassadsHenge;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\MassadsHenge\MassadsHengeCommandFactory;


class MassadsHengeCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new MassadsHengeCommandFactory('test');
	}
}
