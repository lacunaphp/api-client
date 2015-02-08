<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Transporter;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Transporter\GetPlanSummaryCommand;


class GetPlanSummaryCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetPlanSummaryCommand(static::MODULE, static::METHOD, [], []);
	}
}
