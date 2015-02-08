<?php

namespace LacunaPHP\APIClient\Command\Building\Archaeology;

use LacunaPHP\APIClient\Command\APICommand;


class AbandonExcavatorCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['site_id']
		];
	}
}
