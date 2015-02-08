<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Transporter;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Transporter\GetGlyphSummaryCommand;


class GetGlyphSummaryCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetGlyphSummaryCommand(static::MODULE, static::METHOD, [], []);
	}
}
