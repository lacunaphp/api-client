<?php

namespace LacunaPHP\APIClient\Command\Empire;

use LacunaPHP\APIClient\Command\APICommand;


class ResetPasswordCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['reset_key'],
			$args['password1'],
			$args['password2'],
			$args['api_key']
		];
	}
}
