<?php

namespace LacunaPHP\APIClient\Command\Stats;

use LacunaPHP\APIClient\Command\APICommand;


class ColonyRankCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['sort_by'])) {
			return [
				$args['session_id'],
				$args['sort_by']
			];
		}

		return [
			$args['session_id']
		];
	}
}
