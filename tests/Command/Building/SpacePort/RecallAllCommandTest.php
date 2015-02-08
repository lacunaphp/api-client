<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SpacePort;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\SpacePort\RecallAllCommand;


class RecallAllCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new RecallAllCommand(static::MODULE, static::METHOD, [], []);
	}
}
