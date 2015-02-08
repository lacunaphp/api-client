<?php

namespace LacunaPHP\APIClient\Command\Building\WaterStorage;

use LacunaPHP\APIClient\Command\APICommand;


class DumpCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['amount']
		];
	}
}
