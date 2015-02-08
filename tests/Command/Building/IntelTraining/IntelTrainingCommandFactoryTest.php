<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\IntelTraining;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\IntelTraining\IntelTrainingCommandFactory;


class IntelTrainingCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new IntelTrainingCommandFactory('test');
	}
}
