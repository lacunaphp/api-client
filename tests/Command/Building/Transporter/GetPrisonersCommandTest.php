<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Transporter;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Transporter\GetPrisonersCommand;


class GetPrisonersCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetPrisonersCommand(static::MODULE, static::METHOD, [], []);
	}
}
