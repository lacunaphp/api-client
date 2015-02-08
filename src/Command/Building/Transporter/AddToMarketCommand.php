<?php

namespace LacunaPHP\APIClient\Command\Building\Transporter;

use LacunaPHP\APIClient\Command\APICommand;


class AddToMarketCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$items = [];
		if(is_array($args['items'])) {
			$items = $args['items'];
		} elseif(is_array($args['offer'])) {
			$items = $args['offer'];
		}

		return [
			$args['session_id'],
			$args['building_id'],
			$items,
			$args['ask']
		];
	}
}
