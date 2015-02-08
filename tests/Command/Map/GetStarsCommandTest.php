<?php

namespace LacunaPHP\APIClient\Tests\Command\Map;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Map\GetStarsCommand;


class GetStarsCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new GetStarsCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$x1 = 'X1';
		$y1 = 'Y1';
		$x2 = 'X2';
		$y2 = 'Y2';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'x1' => $x1, 'y1' => $y1, 'x2' => $x2, 'y2' => $y2],
			[$session_id, $x1, $y1, $x2, $y2]
		);
	}
}
