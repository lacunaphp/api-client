<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Trade;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Trade\GetGlyphSummaryCommand;


class GetGlyphSummaryCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetGlyphSummaryCommand(static::MODULE, static::METHOD, [], []);
	}
}
