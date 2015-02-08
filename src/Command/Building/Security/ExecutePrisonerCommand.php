<?php

namespace LacunaPHP\APIClient\Command\Building\Security;

use LacunaPHP\APIClient\Command\APICommand;


class ExecutePrisonerCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['prisoner_id']
		];
	}
}
