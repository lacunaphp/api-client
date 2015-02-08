<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MetalJunkArches;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\MetalJunkArches\MetalJunkArchesCommandFactory;


class MetalJunkArchesCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new MetalJunkArchesCommandFactory('test');
	}
}
