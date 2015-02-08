<?php

namespace LacunaPHP\APIClient\Command\Building\Parliament;

use LacunaPHP\APIClient\Command\APICommand;


class ProposeTransferStationOwnershipCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['to_empire_id']
		];
	}
}
