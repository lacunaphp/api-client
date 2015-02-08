<?php

namespace LacunaPHP\APIClient\Command;

use LacunaPHP\APIClient\Command\APICommand;


class SessionCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id']
		];
	}
}
