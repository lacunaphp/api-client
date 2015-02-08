<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Embassy;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Embassy\DissolveAllianceCommand;


class DissolveAllianceCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new DissolveAllianceCommand(static::MODULE, static::METHOD, [], []);
	}
}
