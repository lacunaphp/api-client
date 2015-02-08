<?php

namespace LacunaPHP\APIClient\Command\Building\Intelligence;

use LacunaPHP\APIClient\Command\APICommand;


class TrainSpyCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['quantity'])) {
			return [
				$args['session_id'],
				$args['building_id'],
				$args['quantity']
			];
		}

		return [
			$args['session_id'],
			$args['building_id']
		];
	}
}
