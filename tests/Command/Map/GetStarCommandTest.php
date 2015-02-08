<?php

namespace LacunaPHP\APIClient\Tests\Command\Map;

use LacunaPHP\APIClient\Tests\Command\StarCommandTest;
use LacunaPHP\APIClient\Command\Map\GetStarCommand;


class GetStarCommandTest extends StarCommandTest {

	public function setUp() {
		$this->command = new GetStarCommand(static::MODULE, static::METHOD, [], []);
	}
}
