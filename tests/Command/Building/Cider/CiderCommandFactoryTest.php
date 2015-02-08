<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Cider;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Cider\CiderCommandFactory;


class CiderCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new CiderCommandFactory('test');
	}
}
