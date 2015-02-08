<?php

namespace LacunaPHP\APIClient\Command;

use LacunaPHP\APIClient\Command\APICommand;


class BuildingCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id']
		];
	}
}
