<?php

namespace LacunaPHP\APIClient\Command\Building\Trade;

use LacunaPHP\APIClient\Command\APICommand;


class UpdateSupplyChainCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['supply_chain_id'],
			$args['resource_type'],
			$args['resource_hour']
		];
	}
}
