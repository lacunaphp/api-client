<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Transporter;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Transporter\GetShipsCommand;


class GetShipsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetShipsCommand(static::MODULE, static::METHOD, [], []);
	}
}
