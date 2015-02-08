<?php

namespace LacunaPHP\APIClient\Command\Building\Parliament;

use LacunaPHP\APIClient\Command\APICommand;


class ProposeRenameStarCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['star_id'],
			$args['name']
		];
	}
}
