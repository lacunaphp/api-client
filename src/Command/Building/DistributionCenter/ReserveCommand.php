<?php

namespace LacunaPHP\APIClient\Command\Building\DistributionCenter;

use LacunaPHP\APIClient\Command\APICommand;


class ReserveCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['resources']
		];
	}
}
