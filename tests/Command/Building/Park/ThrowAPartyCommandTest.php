<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Park;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Park\ThrowAPartyCommand;


class ThrowAPartyCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ThrowAPartyCommand(static::MODULE, static::METHOD, [], []);
	}
}
