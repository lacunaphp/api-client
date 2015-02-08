<?php

namespace LacunaPHP\APIClient\Command\Building\TheDillonForge;

use LacunaPHP\APIClient\Command\APICommand;


class SplitPlanCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['plan_class'],
			$args['level'],
			$args['extra_build_level'],
			$args['quantity']
		];
	}
}
