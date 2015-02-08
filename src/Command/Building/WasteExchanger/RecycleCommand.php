<?php

namespace LacunaPHP\APIClient\Command\Building\WasteExchanger;

use LacunaPHP\APIClient\Command\APICommand;


class RecycleCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['use_essentia'])) {
			return [
				$args['session_id'],
				$args['building_id'],
				$args['water'],
				$args['ore'],
				$args['energy'],
				$args['use_essentia']
			];
		}

		return [
			$args['session_id'],
			$args['building_id'],
			$args['water'],
			$args['ore'],
			$args['energy']
		];
	}
}
