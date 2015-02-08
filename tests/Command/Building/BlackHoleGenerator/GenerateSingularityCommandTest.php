<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\BlackHoleGenerator;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Building\BlackHoleGenerator\GenerateSingularityCommand;


class GenerateSingularityCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new GenerateSingularityCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$building_id = 'BUILDING-ID';
		$target = [
			'x' => 'TARGETX',
			'y' => 'TARGETY'
		];
		$params = [
			'newtype' => 'NEWTYPE'
		];

		$this->verifyCommandParams(
			['session_id' => $session_id, 'building_id' => $building_id, 'target' => $target],
			[['session_id' => $session_id, 'building_id' => $building_id, 'target' => $target]]
		);

		$this->verifyCommandParams(
			['session_id' => $session_id, 'building_id' => $building_id, 'target' => $target, 'params' => $params],
			[['session_id' => $session_id, 'building_id' => $building_id, 'target' => $target, 'params' => $params]]
		);
	}
}
