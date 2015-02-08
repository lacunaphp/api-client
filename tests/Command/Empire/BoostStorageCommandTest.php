<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\BoostStorageCommand;


class BoostStorageCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new BoostStorageCommand(static::MODULE, static::METHOD, [], []);
	}
}
