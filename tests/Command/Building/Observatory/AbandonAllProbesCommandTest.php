<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Observatory;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Observatory\AbandonAllProbesCommand;


class AbandonAllProbesCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new AbandonAllProbesCommand(static::MODULE, static::METHOD, [], []);
	}
}
