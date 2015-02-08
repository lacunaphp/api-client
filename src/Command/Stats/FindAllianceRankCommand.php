<?php

namespace LacunaPHP\APIClient\Command\Stats;

use LacunaPHP\APIClient\Command\APICommand;


class FindAllianceRankCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['sort_by'],
			$args['alliance_name']
		];
	}
}
