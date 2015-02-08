<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Archaeology;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Archaeology\GetOresAvailableForProcessingCommand;


class GetOresAvailableForProcessingCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetOresAvailableForProcessingCommand(static::MODULE, static::METHOD, [], []);
	}
}
