<?php

namespace LacunaPHP\APIClient\Command\Building\Shipyard;

use LacunaPHP\APIClient\Command\APICommand;


class ViewBuildQueueCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['page_number'])) {
			return [
				$args['session_id'],
				$args['building_id'],
				$args['page_number']
			];
		}

		return [
			$args['session_id'],
			$args['building_id']
		];
	}
}
