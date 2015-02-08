<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Archaeology;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Archaeology\ViewExcavatorsCommand;


class ViewExcavatorsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewExcavatorsCommand(static::MODULE, static::METHOD, [], []);
	}
}
