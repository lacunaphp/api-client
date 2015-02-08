<?php

namespace LacunaPHP\APIClient\Tests\Command\Stats;

use LacunaPHP\APIClient\Tests\Command\Stats\FindAllianceRankCommandTest;
use LacunaPHP\APIClient\Command\Stats\FindEmpireRankCommand;


class FindEmpireRankCommandTest extends FindAllianceRankCommandTest {

	public function setUp() {
		$this->command = new FindEmpireRankCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$sort_by = 'SORT-BY';
		$empire_name = 'EMPIRE-NAME';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'sort_by' => $sort_by, 'empire_name' => $empire_name],
			[$session_id, $sort_by, $empire_name]
		);
	}
}
