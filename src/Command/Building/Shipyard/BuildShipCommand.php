<?php

namespace LacunaPHP\APIClient\Command\Building\Shipyard;

use LacunaPHP\APIClient\Command\APICommand;


class BuildShipCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['quantity'])) {
			return [
				$args['session_id'],
				$args['building_id'],
				$args['type'],
				$args['quantity']
			];
		}

		return [
			$args['session_id'],
			$args['building_id'],
			$args['type']
		];
	}
}
