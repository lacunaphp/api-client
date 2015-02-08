<?php

namespace LacunaPHP\APIClient\Command\Building\Archaeology;

use LacunaPHP\APIClient\Command\APICommand;


class SearchForGlyphCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['ore_type']
		];
	}
}
