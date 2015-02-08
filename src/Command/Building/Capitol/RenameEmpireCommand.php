<?php

namespace LacunaPHP\APIClient\Command\Building\Capitol;

use LacunaPHP\APIClient\Command\APICommand;


class RenameEmpireCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['name']
		];
	}
}
