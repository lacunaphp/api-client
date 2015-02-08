<?php

namespace LacunaPHP\APIClient\Command\Building\SpacePort;

use LacunaPHP\APIClient\Command\APICommand;


class MassScuttleShipCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['ship_ids']
		];
	}
}
