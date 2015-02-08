<?php

namespace LacunaPHP\APIClient\Tests\Command\Stats;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Stats\ColonyRankCommand;


class ColonyRankCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new ColonyRankCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$sort_by = 'SORT-BY';

		$this->verifyCommandParams(
			['session_id' => $session_id],
			[$session_id]
		);

		$this->verifyCommandParams(
			['session_id' => $session_id, 'sort_by' => $sort_by],
			[$session_id, $sort_by]
		);
	}
}
