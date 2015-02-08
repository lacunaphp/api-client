<?php

namespace LacunaPHP\APIClient\Command\Map;

use LacunaPHP\APIClient\Command\APICommand;


class GetStarByNameCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['name']
		];
	}
}
