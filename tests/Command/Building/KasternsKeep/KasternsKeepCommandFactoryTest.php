<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\KasternsKeep;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\KasternsKeep\KasternsKeepCommandFactory;


class KasternsKeepCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new KasternsKeepCommandFactory('test');
	}
}
