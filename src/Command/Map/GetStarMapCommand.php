<?php

namespace LacunaPHP\APIClient\Command\Map;

use LacunaPHP\APIClient\Command\APICommand;


class GetStarMapCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [[
			'session_id' => $args['session_id'],
			'left'       => $args['left'],
			'top'        => $args['top'],
			'right'      => $args['right'],
			'bottom'     => $args['bottom']
		]];
	}
}
