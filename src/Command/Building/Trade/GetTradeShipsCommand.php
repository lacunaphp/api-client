<?php

namespace LacunaPHP\APIClient\Command\Building\Trade;

use LacunaPHP\APIClient\Command\APICommand;


class GetTradeShipsCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['target_body_id'])) {
			return [
				$args['session_id'],
				$args['building_id'],
				$args['target_body_id']
			];
		}

		return [
			$args['session_id'],
			$args['building_id']
		];
	}
}
