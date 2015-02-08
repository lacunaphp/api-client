<?php

namespace LacunaPHP\APIClient\Command\Building\Trade;

use LacunaPHP\APIClient\Command\APICommand;


class CreateSupplyChainCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['target_id'],
			$args['resource_type'],
			$args['resource_hour']
		];
	}
}
