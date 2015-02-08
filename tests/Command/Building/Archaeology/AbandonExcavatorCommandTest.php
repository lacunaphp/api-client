<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Archaeology;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Building\Archaeology\AbandonExcavatorCommand;


class AbandonExcavatorCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new AbandonExcavatorCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$building_id = 'BUILDING-ID';
		$site_id = 'SITE-ID';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'building_id' => $building_id, 'site_id' => $site_id],
			[$session_id, $building_id, $site_id]
		);
	}
}
