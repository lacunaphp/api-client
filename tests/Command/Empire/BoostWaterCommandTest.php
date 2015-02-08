<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\BoostWaterCommand;


class BoostWaterCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new BoostWaterCommand(static::MODULE, static::METHOD, [], []);
	}
}
