<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Trade;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Trade\GetShipsCommand;


class GetShipsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetShipsCommand(static::MODULE, static::METHOD, [], []);
	}
}
