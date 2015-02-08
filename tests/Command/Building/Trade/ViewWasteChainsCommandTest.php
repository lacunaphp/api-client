<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Trade;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Trade\ViewWasteChainsCommand;


class ViewWasteChainsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewWasteChainsCommand(static::MODULE, static::METHOD, [], []);
	}
}
