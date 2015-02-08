<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Trade;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Trade\ViewSupplyChainsCommand;


class ViewSupplyChainsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewSupplyChainsCommand(static::MODULE, static::METHOD, [], []);
	}
}
