<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Transporter;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Transporter\GetStoredResourcesCommand;


class GetStoredResourcesCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetStoredResourcesCommand(static::MODULE, static::METHOD, [], []);
	}
}
