<?php

namespace LacunaPHP\APIClient\Command\Building\Development;

use LacunaPHP\APIClient\Command\APICommand;


class SubsidizeOneBuildCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [[
			'session_id'   => $args['session_id'],
			'building_id'  => $args['building_id'],
			'scheduled_id' => $args['scheduled_id']
		]];
	}
}
