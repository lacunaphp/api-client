<?php

namespace LacunaPHP\APIClient\Command\Building\GeneticsLab;

use LacunaPHP\APIClient\Command\APICommand;


class RunExperimentCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['spy_id'],
			$args['affinity']
		];
	}
}
