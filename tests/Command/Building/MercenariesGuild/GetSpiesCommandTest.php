<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MercenariesGuild;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\MercenariesGuild\GetSpiesCommand;


class GetSpiesCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetSpiesCommand(static::MODULE, static::METHOD, [], []);
	}
}
