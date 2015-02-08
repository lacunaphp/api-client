<?php

namespace LacunaPHP\APIClient\Command\Building\MercenariesGuild;

use LacunaPHP\APIClient\Command\APICommand;


class AddToMarketCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['ship_id'])) {
			return [
				$args['session_id'],
				$args['building_id'],
				$args['spy_id'],
				$args['ask'],
				$args['ship_id']
			];
		}

		return [
			$args['session_id'],
			$args['building_id'],
			$args['spy_id'],
			$args['ask']
		];
	}
}
