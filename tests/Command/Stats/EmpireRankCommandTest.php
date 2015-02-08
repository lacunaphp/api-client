<?php

namespace LacunaPHP\APIClient\Tests\Command\Stats;

use LacunaPHP\APIClient\Tests\Command\Stats\AllianceRankCommandTest;
use LacunaPHP\APIClient\Command\Stats\EmpireRankCommand;


class EmpireRankCommandTest extends AllianceRankCommandTest {

	public function setUp() {
		$this->command = new EmpireRankCommand(static::MODULE, static::METHOD, [], []);
	}
}
