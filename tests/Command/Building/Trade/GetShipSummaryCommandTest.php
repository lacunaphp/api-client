<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Trade;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Trade\GetShipSummaryCommand;


class GetShipSummaryCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetShipSummaryCommand(static::MODULE, static::METHOD, [], []);
	}
}
