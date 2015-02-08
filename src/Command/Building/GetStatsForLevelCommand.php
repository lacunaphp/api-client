<?php

namespace LacunaPHP\APIClient\Command\Building;

use LacunaPHP\APIClient\Command\APICommand;


class GetStatsForLevelCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['level']
		];
	}
}
