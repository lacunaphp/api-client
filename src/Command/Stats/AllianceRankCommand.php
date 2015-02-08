<?php

namespace LacunaPHP\APIClient\Command\Stats;

use LacunaPHP\APIClient\Command\APICommand;


class AllianceRankCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['sort_by'])) {
			if(isset($args['page_number'])) {
				return [
					$args['session_id'],
					$args['sort_by'],
					$args['page_number']
				];
			}

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
