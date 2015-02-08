<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\TheDillonForge;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\TheDillonForge\SubsidizeCommand;


class SubsidizeCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new SubsidizeCommand(static::MODULE, static::METHOD, [], []);
	}
}
