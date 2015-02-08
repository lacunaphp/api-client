<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\GeneticsLab;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\GeneticsLab\PrepareExperimentCommand;


class PrepareExperimentCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new PrepareExperimentCommand(static::MODULE, static::METHOD, [], []);
	}
}
