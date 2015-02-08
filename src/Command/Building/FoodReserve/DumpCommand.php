<?php

namespace LacunaPHP\APIClient\Command\Building\FoodReserve;

use LacunaPHP\APIClient\Command\APICommand;


class DumpCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['type'],
			$args['amount']
		];
	}
}
