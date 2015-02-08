<?php

namespace LacunaPHP\APIClient\Tests\Command\Body;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Body\RearrangeBuildingsCommand;


class RearrangeBuildingsCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new RearrangeBuildingsCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$body_id = 'BODY-ID';
		$arrangement = [
			['id' => 1, 'x' => 1, 'y' => 1],
			['id' => 2, 'x' => 2, 'y' => 2],
			['id' => 3, 'x' => 3, 'y' => 3]
		];

		$this->verifyCommandParams(
			['session_id' => $session_id, 'body_id' => $body_id, 'arrangement' => $arrangement],
			[$session_id, $body_id, $arrangement]
		);
	}
}
