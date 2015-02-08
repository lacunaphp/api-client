<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MissionCommand;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\MissionCommand\GetMissionsCommand;


class GetMissionsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetMissionsCommand(static::MODULE, static::METHOD, [], []);
	}
}
