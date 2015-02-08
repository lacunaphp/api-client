<?php

namespace LacunaPHP\APIClient\Tests\Command;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\BodyCommand;


class BodyCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new BodyCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$body_id = 'BODY-ID';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'body_id' => $body_id],
			[$session_id, $body_id]
		);
	}
}
