<?php

namespace LacunaPHP\APIClient\Command\Building\MiningMinistry;

use LacunaPHP\APIClient\Command\APICommand;


class RemoveCargoShipFromFleetCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['ship_id']
		];
	}
}
