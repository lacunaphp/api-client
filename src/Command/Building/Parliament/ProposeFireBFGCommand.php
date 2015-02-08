<?php

namespace LacunaPHP\APIClient\Command\Building\Parliament;

use LacunaPHP\APIClient\Command\APICommand;


class ProposeFireBFGCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['body_id'],
			$args['reason']
		];
	}
}
