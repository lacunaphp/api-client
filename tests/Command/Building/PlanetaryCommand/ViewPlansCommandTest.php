<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\PlanetaryCommand;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\PlanetaryCommand\ViewPlansCommand;


class ViewPlansCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewPlansCommand(static::MODULE, static::METHOD, [], []);
	}
}
