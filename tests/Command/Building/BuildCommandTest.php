<?php

namespace LacunaPHP\APIClient\Tests\Command\Building;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Building\BuildCommand;


class BuildCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new BuildCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$body_id = 'BODY-ID';
		$x = 'X';
		$y = 'Y';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'body_id' => $body_id, 'x' => $x, 'y' => $y],
			[$session_id, $body_id, $x, $y]
		);
	}
}
