<?php

namespace LacunaPHP\APIClient\Tests\Command\Map;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Map\GetStarMapCommand;


class GetStarMapCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new GetStarMapCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$left = 'LEFT';
		$top = 'TOP';
		$right = 'RIGHT';
		$bottom = 'BOTTOM';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'left' => $left, 'top' => $top, 'right' => $right, 'bottom' => $bottom],
			[['session_id' => $session_id, 'left' => $left, 'top' => $top, 'right' => $right, 'bottom' => $bottom]]
		);
	}
}
