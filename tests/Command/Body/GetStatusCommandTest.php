<?php

namespace LacunaPHP\APIClient\Tests\Command\Body;

use LacunaPHP\APIClient\Tests\Command\BodyCommandTest;
use LacunaPHP\APIClient\Command\Body\GetStatusCommand;


class GetStatusCommandTest extends BodyCommandTest {

	public function setUp() {
		$this->command = new GetStatusCommand(static::MODULE, static::METHOD, [], []);
	}
}
