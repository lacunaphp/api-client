<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\BoostOreCommand;


class BoostOreCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new BoostOreCommand(static::MODULE, static::METHOD, [], []);
	}
}
