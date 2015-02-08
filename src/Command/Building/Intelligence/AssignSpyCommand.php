<?php

namespace LacunaPHP\APIClient\Command\Building\Intelligence;

use LacunaPHP\APIClient\Command\APICommand;


class AssignSpyCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['spy_id'],
			$args['assignment']
		];
	}
}
