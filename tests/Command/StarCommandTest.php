<?php

namespace LacunaPHP\APIClient\Tests\Command;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\StarCommand;


class StarCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new StarCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$star_id = 'STAR-ID';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'star_id' => $star_id],
			[$session_id, $star_id]
		);
	}
}
