<?php

namespace LacunaPHP\APIClient\Command\Empire;

use LacunaPHP\APIClient\Command\APICommand;


class IsNameAvailableCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['name']
		];
	}
}
