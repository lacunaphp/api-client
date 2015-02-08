<?php

namespace LacunaPHP\APIClient\Tests\Command\Map;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Map\GetStarByXYCommand;


class GetStarByXYCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new GetStarByXYCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$x = 'X';
		$y = 'Y';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'x' => $x, 'y' => $y],
			[$session_id, $x, $y]
		);
	}
}
