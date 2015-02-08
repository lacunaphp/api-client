<?php

namespace LacunaPHP\APIClient\Command\Captcha;

use LacunaPHP\APIClient\Command\APICommand;


class SolveCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['captcha_guid'],
			$args['captcha_solution']
		];
	}
}
