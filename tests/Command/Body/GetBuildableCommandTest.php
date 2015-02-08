<?php

namespace LacunaPHP\APIClient\Tests\Command\Body;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Body\GetBuildableCommand;


class GetBuildableCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new GetBuildableCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$body_id = 'BODY-ID';
		$x = 1;
		$y = 2;
		$tag = 'Infrastructure';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'body_id' => $body_id, 'x' => $x, 'y' => $y, 'tag' => $tag],
			[$session_id, $body_id, $x, $y, $tag]
		);
	}
}
