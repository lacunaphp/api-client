<?php

namespace LacunaPHP\APIClient\Command\Building\Trade;

use LacunaPHP\APIClient\Command\APICommand;


class AcceptFromMarketCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['trade_id']
		];
	}
}
