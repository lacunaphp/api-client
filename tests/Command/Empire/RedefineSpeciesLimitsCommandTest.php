<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\RedefineSpeciesLimitsCommand;


class RedefineSpeciesLimitsCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new RedefineSpeciesLimitsCommand(static::MODULE, static::METHOD, [], []);
	}
}
