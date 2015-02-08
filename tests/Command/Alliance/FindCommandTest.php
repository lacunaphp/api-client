<?php

namespace LacunaPHP\APIClient\Tests\Command\Alliance;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Alliance\FindCommand;


class FindCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new FindCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$name = 'NAME';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'name' => $name],
			[$session_id, $name]
		);
	}
}
