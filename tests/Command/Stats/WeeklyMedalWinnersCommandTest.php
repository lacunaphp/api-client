<?php

namespace LacunaPHP\APIClient\Tests\Command\Stats;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Stats\WeeklyMedalWinnersCommand;


class WeeklyMedalWinnersCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new WeeklyMedalWinnersCommand(static::MODULE, static::METHOD, [], []);
	}
}
