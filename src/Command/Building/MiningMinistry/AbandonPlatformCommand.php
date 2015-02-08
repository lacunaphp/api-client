<?php

namespace LacunaPHP\APIClient\Command\Building\MiningMinistry;

use LacunaPHP\APIClient\Command\APICommand;


class AbandonPlatformCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['platform_id']
		];
	}
}
