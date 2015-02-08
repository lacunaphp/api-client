<?php

namespace LacunaPHP\APIClient\Command\Building\Network19;

use LacunaPHP\APIClient\Command\APICommand;


class RestrictCoverageCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['onoff']
		];
	}
}
