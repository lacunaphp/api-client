<?php

namespace LacunaPHP\APIClient\Command\Building\Shipyard;

use LacunaPHP\APIClient\Command\APICommand;


class BuildShipsCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$options = [];
		if(is_array($args['options'])) {
			$options = $args['options'];
		}

		$keys = [
			'type',
			'quantity',
			'body_id',
			'building_id',
			'autoselect'
		];

		foreach($keys as $key) {
			if(isset($args[$key])) {
				$options[$key] = $args[$key];
			}
		}

		return [
			$args['session_id'],
			$options
		];
	}
}
