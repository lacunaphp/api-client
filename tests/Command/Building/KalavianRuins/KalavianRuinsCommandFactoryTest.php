<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\KalavianRuins;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\KalavianRuins\KalavianRuinsCommandFactory;


class KalavianRuinsCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new KalavianRuinsCommandFactory('test');
	}
}
