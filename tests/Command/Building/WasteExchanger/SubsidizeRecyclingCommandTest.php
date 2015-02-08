<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\WasteExchanger;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\WasteExchanger\SubsidizeRecyclingCommand;


class SubsidizeRecyclingCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new SubsidizeRecyclingCommand(static::MODULE, static::METHOD, [], []);
	}
}
