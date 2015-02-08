<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\GratchsGauntlet;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\GratchsGauntlet\GratchsGauntletCommandFactory;


class GratchsGauntletCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new GratchsGauntletCommandFactory('test');
	}
}
