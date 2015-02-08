<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Archaeology;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Archaeology\SubsidizeSearchCommand;


class SubsidizeSearchCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new SubsidizeSearchCommand(static::MODULE, static::METHOD, [], []);
	}
}
