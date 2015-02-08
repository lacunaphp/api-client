<?php

namespace LacunaPHP\APIClient\Command\Building;

use LacunaPHP\APIClient\Command\APICommand;


class BuildCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['body_id'],
			$args['x'],
			$args['y']
		];
	}
}
