<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\DisableSelfDestructCommand;


class DisableSelfDestructCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new DisableSelfDestructCommand(static::MODULE, static::METHOD, [], []);
	}
}
