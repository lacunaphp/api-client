<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Parliament;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Parliament\GetStarsInJurisdictionCommand;


class GetStarsInJurisdictionCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetStarsInJurisdictionCommand(static::MODULE, static::METHOD, [], []);
	}
}
