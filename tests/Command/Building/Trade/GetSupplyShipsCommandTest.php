<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Trade;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Trade\GetSupplyShipsCommand;


class GetSupplyShipsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetSupplyShipsCommand(static::MODULE, static::METHOD, [], []);
	}
}
