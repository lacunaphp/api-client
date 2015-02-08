<?php

namespace LacunaPHP\APIClient\Command\Building\Archaeology;

use LacunaPHP\APIClient\Command\APICommand;


class AssembleGlyphsCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['glyphs'],
			$args['quantity'] ?: 1
		];
	}
}
