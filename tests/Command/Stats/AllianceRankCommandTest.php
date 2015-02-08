<?php

namespace LacunaPHP\APIClient\Tests\Command\Stats;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Stats\AllianceRankCommand;


class AllianceRankCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new AllianceRankCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$sort_by = 'SORT-BY';
		$page_number = 'PAGE-NUMBER';

		$this->verifyCommandParams(
			['session_id' => $session_id],
			[$session_id]
		);

		$this->verifyCommandParams(
			['session_id' => $session_id, 'sort_by' => $sort_by],
			[$session_id, $sort_by]
		);

		$this->verifyCommandParams(
			['session_id' => $session_id, 'sort_by' => $sort_by, 'page_number' => $page_number],
			[$session_id, $sort_by, $page_number]
		);
	}
}
