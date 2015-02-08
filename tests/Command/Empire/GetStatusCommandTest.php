<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\GetStatusCommand;


class GetStatusCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new GetStatusCommand(static::MODULE, static::METHOD, [], []);
	}
}
