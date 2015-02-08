<?php

namespace LacunaPHP\APIClient\Command\Building\Shipyard;

use LacunaPHP\APIClient\Command\APICommand;


class GetBuildableCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['tag'])) {
			return [
				$args['session_id'],
				$args['building_id'],
				$args['tag']
			];
		}

		return [
			$args['session_id'],
			$args['building_id']
		];
	}
}
