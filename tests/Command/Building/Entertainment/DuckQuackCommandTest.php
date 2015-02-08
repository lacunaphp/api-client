<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Entertainment;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Entertainment\DuckQuackCommand;


class DuckQuackCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new DuckQuackCommand(static::MODULE, static::METHOD, [], []);
	}
}
