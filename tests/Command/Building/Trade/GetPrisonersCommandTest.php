<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Trade;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Trade\GetPrisonersCommand;


class GetPrisonersCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetPrisonersCommand(static::MODULE, static::METHOD, [], []);
	}
}
