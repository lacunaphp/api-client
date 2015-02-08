<?php

namespace LacunaPHP\APIClient\Tests\Command\Body;

use LacunaPHP\APIClient\Tests\Command\BodyCommandTest;
use LacunaPHP\APIClient\Command\Body\AbandonCommand;


class AbandonCommandTest extends BodyCommandTest {

	public function setUp() {
		$this->command = new AbandonCommand(static::MODULE, static::METHOD, [], []);
	}
}
