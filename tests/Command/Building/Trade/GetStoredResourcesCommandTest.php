<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Trade;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Trade\GetStoredResourcesCommand;


class GetStoredResourcesCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetStoredResourcesCommand(static::MODULE, static::METHOD, [], []);
	}
}
