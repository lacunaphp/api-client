<?php

namespace LacunaPHP\APIClient\Tests\Command\Building;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\DowngradeCommand;


class DowngradeCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new DowngradeCommand(static::MODULE, static::METHOD, [], []);
	}
}
