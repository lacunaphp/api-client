<?php

namespace LacunaPHP\APIClient\Command\Building\Observatory;

use LacunaPHP\APIClient\Command\APICommand;


class AbandonProbeCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['star_id']
		];
	}
}
