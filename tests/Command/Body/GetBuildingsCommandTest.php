<?php

namespace LacunaPHP\APIClient\Tests\Command\Body;

use LacunaPHP\APIClient\Tests\Command\BodyCommandTest;
use LacunaPHP\APIClient\Command\Body\GetBuildingsCommand;


class GetBuildingsCommandTest extends BodyCommandTest {

	public function setUp() {
		$this->command = new GetBuildingsCommand(static::MODULE, static::METHOD, [], []);
	}
}
