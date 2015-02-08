<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MayhemTraining;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\MayhemTraining\MayhemTrainingCommandFactory;


class MayhemTrainingCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new MayhemTrainingCommandFactory('test');
	}
}
