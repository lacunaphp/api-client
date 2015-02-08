<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\EnergyReserve;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Building\EnergyReserve\DumpCommand;


class DumpCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new DumpCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$building_id = 'BUILDING-ID';
		$amount = 'AMOUNT';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'building_id' => $building_id, 'amount' => $amount],
			[$session_id, $building_id, $amount]
		);
	}
}
