<?php

namespace LacunaPHP\APIClient\Command\Building\PoliceStation;

use LacunaPHP\APIClient\Command\APICommand;


class ReleasePrisonerCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['prisoner_id']
		];
	}
}
