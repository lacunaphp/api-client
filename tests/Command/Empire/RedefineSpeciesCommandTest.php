<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Empire\RedefineSpeciesCommand;


class RedefineSpeciesCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new RedefineSpeciesCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';

		$name = 'TEST-NAME';
		$description = 'TEST-DESCRIPTION';

		$varnames = [
			'min_orbit',
			'max_orbit',
			'manufacturing_affinity',
			'deception_affinity',
			'research_affinity',
			'management_affinity',
			'farming_affinity',
			'mining_affinity',
			'science_affinity',
			'environmental_affinity',
			'political_affinity',
			'trade_affinity',
			'growth_affinity',
		];

		do {
			$args = [
				'session_id' => $session_id,
				'name' => $name,
				'description' => $description
			];
			$params = [
				'name' => $name,
				'description' => $description
			];
			foreach($varnames as $varname) {
				$varvalue = rand(1, 7);
				$args[$varname] = $varvalue;
				$params[$varname] = $varvalue;
			}

			$this->verifyCommandParams(
				$args,
				[$session_id, $params]
			);
		} while($count++ < 3);
	}
}
