<?php

namespace LacunaPHP\APIClient\Command\Building\Transporter;

use LacunaPHP\APIClient\Command\APICommand;


class PushItemsCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$items = [];
		if(is_array($args['items'])) {
			$items = $args['items'];
		}

		return [
			$args['session_id'],
			$args['building_id'],
			$args['target_id'],
			$items
		];
	}
}
