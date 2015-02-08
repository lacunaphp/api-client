<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MiningMinistry;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\MiningMinistry\MassAbandonPlatformCommand;


class MassAbandonPlatformCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new MassAbandonPlatformCommand(static::MODULE, static::METHOD, [], []);
	}
}
