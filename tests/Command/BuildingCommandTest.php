<?php

namespace LacunaPHP\APIClient\Tests\Command;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\BuildingCommand;


class BuildingCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new BuildingCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$building_id = 'BUILDING-ID';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'building_id' => $building_id],
			[$session_id, $building_id]
		);
	}
}
