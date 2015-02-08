<?php

namespace LacunaPHP\APIClient\Tests\Command\Map;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Map\ProbeSummaryFissuresCommand;


class ProbeSummaryFissuresCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new ProbeSummaryFissuresCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$zone = '0|0';

		$this->verifyCommandParams(
			['session_id' => $session_id],
			[['session_id' => $session_id]]
		);

		$this->verifyCommandParams(
			['session_id' => $session_id, 'zone' => $zone],
			[['session_id' => $session_id, 'zone' => $zone]]
		);
	}
}
