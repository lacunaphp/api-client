<?php

namespace LacunaPHP\APIClient\Tests\Command;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\EmpireCommand;


class EmpireCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new EmpireCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$empire_id = 'EMPIRE-ID';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'empire_id' => $empire_id],
			[$session_id, $empire_id]
		);
	}
}
