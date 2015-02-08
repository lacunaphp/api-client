<?php

namespace LacunaPHP\APIClient\Command\Map;

use LacunaPHP\APIClient\Command\APICommand;


class SearchStarsCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['name']
		];
	}
}
