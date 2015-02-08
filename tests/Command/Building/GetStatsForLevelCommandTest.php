<?php

namespace LacunaPHP\APIClient\Tests\Command\Building;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Building\GetStatsForLevelCommand;


class GetStatsForLevelCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new GetStatsForLevelCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$building_id = 'BUILDING-ID';
		$level = 'LEVEL';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'building_id' => $building_id, 'level' => $level],
			[$session_id, $building_id, $level]
		);
	}
}
