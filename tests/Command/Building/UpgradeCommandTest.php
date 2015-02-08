<?php

namespace LacunaPHP\APIClient\Tests\Command\Building;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\UpgradeCommand;


class UpgradeCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new UpgradeCommand(static::MODULE, static::METHOD, [], []);
	}
}
