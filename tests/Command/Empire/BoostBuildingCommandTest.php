<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\BoostBuildingCommand;


class BoostBuildingCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new BoostBuildingCommand(static::MODULE, static::METHOD, [], []);
	}
}
