<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\BoostFoodCommand;


class BoostFoodCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new BoostFoodCommand(static::MODULE, static::METHOD, [], []);
	}
}
