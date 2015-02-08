<?php

namespace LacunaPHP\APIClient\Command\Empire;

use LacunaPHP\APIClient\Command\APICommand;


class RedefineSpeciesCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$vars = [
			// text string
			'name',
			'description',

			// integer (1-7)
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

		$params = $args['params'] ?: [];
		foreach($vars as $var) {
			if(isset($args[$var])) {
				$params[$var] = $args[$var];
			}
		}

		return [
			$args['session_id'],
			$params
		];
	}
}
