<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Archaeology;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Building\Archaeology\AssembleGlyphsCommand;


class AssembleGlyphsCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new AssembleGlyphsCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$building_id = 'BUILDING-ID';
		$glyphs = 'GLYPHS';
		$quantity = 'QUANTITY';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'building_id' => $building_id, 'glyphs' => $glyphs],
			[$session_id, $building_id, $glyphs, 1]
		);

		$this->verifyCommandParams(
			['session_id' => $session_id, 'building_id' => $building_id, 'glyphs' => $glyphs, 'quantity' => $quantity],
			[$session_id, $building_id, $glyphs, $quantity]
		);
	}
}
