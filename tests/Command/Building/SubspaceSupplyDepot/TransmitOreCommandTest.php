<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\SubspaceSupplyDepot;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\SubspaceSupplyDepot\TransmitOreCommand;


class TransmitOreCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new TransmitOreCommand(static::MODULE, static::METHOD, [], []);
	}
}
