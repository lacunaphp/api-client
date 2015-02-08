<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Archaeology;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Building\Archaeology\SearchForGlyphCommand;


class SearchForGlyphCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new SearchForGlyphCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$building_id = 'BUILDING-ID';
		$ore_type = 'ORE-TYPE';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'building_id' => $building_id, 'ore_type' => $ore_type],
			[$session_id, $building_id, $ore_type]
		);
	}
}
