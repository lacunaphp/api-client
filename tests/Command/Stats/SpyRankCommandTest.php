<?php

namespace LacunaPHP\APIClient\Tests\Command\Stats;

use LacunaPHP\APIClient\Tests\Command\Stats\ColonyRankCommandTest;
use LacunaPHP\APIClient\Command\Stats\SpyRankCommand;


class SpyRankCommandTest extends ColonyRankCommandTest {

	public function setUp() {
		$this->command = new SpyRankCommand(static::MODULE, static::METHOD, [], []);
	}
}
