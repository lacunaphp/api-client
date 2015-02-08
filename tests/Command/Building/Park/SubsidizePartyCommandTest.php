<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Park;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Park\SubsidizePartyCommand;


class SubsidizePartyCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new SubsidizePartyCommand(static::MODULE, static::METHOD, [], []);
	}
}
