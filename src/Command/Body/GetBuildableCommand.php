<?php

namespace LacunaPHP\APIClient\Command\Body;

use LacunaPHP\APIClient\Command\APICommand;


class GetBuildableCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['body_id'],
			$args['x'],
			$args['y'],
			$args['tag']
		];
	}
}
