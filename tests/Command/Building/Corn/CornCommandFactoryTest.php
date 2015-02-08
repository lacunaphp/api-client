<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Corn;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Corn\CornCommandFactory;


class CornCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new CornCommandFactory('test');
	}
}
