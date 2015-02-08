<?php

namespace LacunaPHP\APIClient\Command\Building\SpacePort;

use LacunaPHP\APIClient\Command\APICommand;


class FetchSpiesCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['on_body_id'],
			$args['to_body_id'],
			$args['ship_id'],
			$args['spy_ids']
		];
	}
}
