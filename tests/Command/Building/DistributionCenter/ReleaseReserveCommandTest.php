<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\DistributionCenter;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\DistributionCenter\ReleaseReserveCommand;


class ReleaseReserveCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ReleaseReserveCommand(static::MODULE, static::METHOD, [], []);
	}
}
