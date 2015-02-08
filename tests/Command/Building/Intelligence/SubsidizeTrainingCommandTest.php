<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Intelligence;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Intelligence\SubsidizeTrainingCommand;


class SubsidizeTrainingCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new SubsidizeTrainingCommand(static::MODULE, static::METHOD, [], []);
	}
}
