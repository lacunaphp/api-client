<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Embassy;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Embassy\GetAllianceStatusCommand;


class GetAllianceStatusCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetAllianceStatusCommand(static::MODULE, static::METHOD, [], []);
	}
}
