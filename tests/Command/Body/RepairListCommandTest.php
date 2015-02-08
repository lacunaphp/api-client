<?php

namespace LacunaPHP\APIClient\Tests\Command\Body;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Body\RepairListCommand;


class RepairListCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new RepairListCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$body_id = 'BODY-ID';
		$building_ids = [1, 2, 3, 4, 5];

		$this->verifyCommandParams(
			['session_id' => $session_id, 'body_id' => $body_id, 'building_ids' => $building_ids],
			[$session_id, $body_id, $building_ids]
		);
	}
}
