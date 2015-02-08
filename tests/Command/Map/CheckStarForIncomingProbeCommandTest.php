<?php

namespace LacunaPHP\APIClient\Tests\Command\Map;

use LacunaPHP\APIClient\Tests\Command\StarCommandTest;
use LacunaPHP\APIClient\Command\Map\CheckStarForIncomingProbeCommand;


class CheckStarForIncomingProbeCommandTest extends StarCommandTest {

	public function setUp() {
		$this->command = new CheckStarForIncomingProbeCommand(static::MODULE, static::METHOD, [], []);
	}
}
