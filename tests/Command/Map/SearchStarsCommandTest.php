<?php

namespace LacunaPHP\APIClient\Tests\Command\Map;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Map\SearchStarsCommand;


class SearchStarsCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new SearchStarsCommand(static::MODULE, static::METHOD, [], []);
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
