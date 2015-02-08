<?php

namespace LacunaPHP\APIClient\Command\Building\Trade;

use LacunaPHP\APIClient\Command\APICommand;


class ViewMarketCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['filter'])) {
			return [
				$args['session_id'],
				$args['building_id'],
				$args['page_number'] ?: 1,
				$args['filter']
			];
		}

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
