<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\EnableSelfDestructCommand;


class EnableSelfDestructCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new EnableSelfDestructCommand(static::MODULE, static::METHOD, [], []);
	}
}
