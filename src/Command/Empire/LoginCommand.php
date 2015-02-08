<?php

namespace LacunaPHP\APIClient\Command\Empire;

use LacunaPHP\APIClient\Command\APICommand;


class LoginCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['name'],
			$args['password'],
			$args['api_key']
		];
	}
}
