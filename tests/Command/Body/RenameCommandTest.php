<?php

namespace LacunaPHP\APIClient\Tests\Command\Body;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Body\RenameCommand;


class RenameCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new RenameCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$body_id = 'BODY-ID';
		$name = 'NEW-NAME';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'body_id' => $body_id, 'name' => $name],
			[$session_id, $body_id, $name]
		);
	}
}
