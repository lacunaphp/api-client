<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\PilotTraining;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\PilotTraining\PilotTrainingCommandFactory;


class PilotTrainingCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new PilotTrainingCommandFactory('test');
	}
}
