<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\PlanetaryCommand;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\PlanetaryCommand\ViewIncomingSupplyChainsCommand;


class ViewIncomingSupplyChainsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewIncomingSupplyChainsCommand(static::MODULE, static::METHOD, [], []);
	}
}
