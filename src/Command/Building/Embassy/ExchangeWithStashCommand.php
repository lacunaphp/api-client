<?php

namespace LacunaPHP\APIClient\Command\Building\Embassy;

use LacunaPHP\APIClient\Command\APICommand;


class ExchangeWithStashCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['donation'],
			$args['request']
		];
	}
}
