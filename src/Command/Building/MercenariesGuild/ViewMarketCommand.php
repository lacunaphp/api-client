<?php

namespace LacunaPHP\APIClient\Command\Building\MercenariesGuild;

use LacunaPHP\APIClient\Command\APICommand;


class ViewMarketCommand extends APICommand {

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
