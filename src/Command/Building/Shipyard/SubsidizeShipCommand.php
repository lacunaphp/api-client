<?php

namespace LacunaPHP\APIClient\Command\Building\Shipyard;

use LacunaPHP\APIClient\Command\APICommand;


class SubsidizeShipCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [[
			'session_id'  => $args['session_id'],
			'building_id' => $args['building_id'],
			'ship_id'     => $args['ship_id']
		]];
	}
}
