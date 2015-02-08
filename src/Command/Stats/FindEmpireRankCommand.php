<?php

namespace LacunaPHP\APIClient\Command\Stats;

use LacunaPHP\APIClient\Command\APICommand;


class FindEmpireRankCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['sort_by'],
			$args['empire_name']
		];
	}
}
