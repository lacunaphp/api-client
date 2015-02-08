<?php

namespace LacunaPHP\APIClient\Command\Alliance;

use LacunaPHP\APIClient\Command\APICommand;


class FindCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['name']
		];
	}
}
