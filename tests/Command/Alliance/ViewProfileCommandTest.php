<?php

namespace LacunaPHP\APIClient\Tests\Command\Alliance;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Alliance\ViewProfileCommand;


class ViewProfileCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new ViewProfileCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$alliance_id = 'ALLIANCE-ID';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'alliance_id' => $alliance_id],
			[$session_id, $alliance_id]
		);
	}
}
