<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\TheftTraining;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\TheftTraining\TheftTrainingCommandFactory;


class TheftTrainingCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new TheftTrainingCommandFactory('test');
	}
}
