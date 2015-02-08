<?php

namespace LacunaPHP\APIClient\Command;

use LacunaPHP\APIClient\Command\APICommand;


class EmpireCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['empire_id']
		];
	}
}
