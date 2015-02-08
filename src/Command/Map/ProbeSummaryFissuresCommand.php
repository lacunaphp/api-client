<?php

namespace LacunaPHP\APIClient\Command\Map;

use LacunaPHP\APIClient\Command\APICommand;


class ProbeSummaryFissuresCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['zone'])) {
			return [[
				'session_id' => $args['session_id'],
				'zone'       => $args['zone']
			]];
		}

		return [[
			'session_id' => $args['session_id']
		]];
	}
}
