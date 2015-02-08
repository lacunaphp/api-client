<?php

namespace LacunaPHP\APIClient\Tests\Command\Building;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\ViewCommand;


class ViewCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewCommand(static::MODULE, static::METHOD, [], []);
	}
}
