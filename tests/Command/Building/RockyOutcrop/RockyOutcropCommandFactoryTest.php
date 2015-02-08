<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\RockyOutcrop;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\RockyOutcrop\RockyOutcropCommandFactory;


class RockyOutcropCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new RockyOutcropCommandFactory('test');
	}
}
