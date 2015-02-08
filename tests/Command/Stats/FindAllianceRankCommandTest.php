<?php

namespace LacunaPHP\APIClient\Tests\Command\Stats;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Stats\FindAllianceRankCommand;


class FindAllianceRankCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new FindAllianceRankCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$sort_by = 'SORT-BY';
		$alliance_name = 'ALLIANCE-NAME';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'sort_by' => $sort_by, 'alliance_name' => $alliance_name],
			[$session_id, $sort_by, $alliance_name]
		);
	}
}
