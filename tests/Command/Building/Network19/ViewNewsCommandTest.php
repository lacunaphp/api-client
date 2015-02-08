<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Network19;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Network19\ViewNewsCommand;


class ViewNewsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewNewsCommand(static::MODULE, static::METHOD, [], []);
	}
}
