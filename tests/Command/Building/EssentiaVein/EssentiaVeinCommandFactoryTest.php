<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\EssentiaVein;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\EssentiaVein\EssentiaVeinCommandFactory;


class EssentiaVeinCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new EssentiaVeinCommandFactory('test');
	}
}
