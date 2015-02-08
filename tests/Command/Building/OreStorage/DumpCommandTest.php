<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\OreStorage;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Building\OreStorage\DumpCommand;


class DumpCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new DumpCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$building_id = 'BUILDING-ID';
		$type = 'TYPE';
		$amount = 'AMOUNT';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'building_id' => $building_id, 'type' => $type, 'amount' => $amount],
			[$session_id, $building_id, $type, $amount]
		);
	}
}
