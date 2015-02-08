<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Archaeology;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Archaeology\MassAbandonExcavatorCommand;


class MassAbandonExcavatorCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new MassAbandonExcavatorCommand(static::MODULE, static::METHOD, [], []);
	}
}
