<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Beeldeban;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Beeldeban\BeeldebanCommandFactory;


class BeeldebanCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new BeeldebanCommandFactory('test');
	}
}
