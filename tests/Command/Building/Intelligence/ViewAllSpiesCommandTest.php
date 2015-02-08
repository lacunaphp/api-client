<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Intelligence;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Intelligence\ViewAllSpiesCommand;


class ViewAllSpiesCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewAllSpiesCommand(static::MODULE, static::METHOD, [], []);
	}
}
