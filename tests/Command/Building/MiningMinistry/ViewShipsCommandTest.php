<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MiningMinistry;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\MiningMinistry\ViewShipsCommand;


class ViewShipsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewShipsCommand(static::MODULE, static::METHOD, [], []);
	}
}
