<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\PoliticsTraining;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\PoliticsTraining\PoliticsTrainingCommandFactory;


class PoliticsTrainingCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new PoliticsTrainingCommandFactory('test');
	}
}
