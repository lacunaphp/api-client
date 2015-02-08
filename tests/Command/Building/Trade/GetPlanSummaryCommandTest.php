<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Trade;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Trade\GetPlanSummaryCommand;


class GetPlanSummaryCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetPlanSummaryCommand(static::MODULE, static::METHOD, [], []);
	}
}
