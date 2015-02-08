<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Entertainment;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Entertainment\GetLotteryVotingOptionsCommand;


class GetLotteryVotingOptionsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetLotteryVotingOptionsCommand(static::MODULE, static::METHOD, [], []);
	}
}
