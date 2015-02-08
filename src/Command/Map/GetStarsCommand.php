<?php

namespace LacunaPHP\APIClient\Command\Map;

use LacunaPHP\APIClient\Command\APICommand;


class GetStarsCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['x1'],
			$args['y1'],
			$args['x2'],
			$args['y2']
		];
	}
}
