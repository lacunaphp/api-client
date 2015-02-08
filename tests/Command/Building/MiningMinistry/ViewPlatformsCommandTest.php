<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MiningMinistry;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\MiningMinistry\ViewPlatformsCommand;


class ViewPlatformsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewPlatformsCommand(static::MODULE, static::METHOD, [], []);
	}
}
