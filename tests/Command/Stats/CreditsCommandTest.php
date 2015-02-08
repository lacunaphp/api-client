<?php

namespace LacunaPHP\APIClient\Tests\Command\Stats;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Stats\CreditsCommand;


class CreditsCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new CreditsCommand(static::MODULE, static::METHOD, [], []);
	}
}
