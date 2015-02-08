<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\SpyTrainingBoostCommand;


class SpyTrainingBoostCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new SpyTrainingBoostCommand(static::MODULE, static::METHOD, [], []);
	}
}
