<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Trade;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Trade\GetWasteShipsCommand;


class GetWasteShipsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetWasteShipsCommand(static::MODULE, static::METHOD, [], []);
	}
}
