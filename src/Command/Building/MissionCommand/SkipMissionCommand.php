<?php

namespace LacunaPHP\APIClient\Command\Building\MissionCommand;

use LacunaPHP\APIClient\Command\APICommand;


class SkipMissionCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['mission_id']
		];
	}
}
