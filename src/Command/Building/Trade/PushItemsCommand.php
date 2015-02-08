<?php

namespace LacunaPHP\APIClient\Command\Building\Trade;

use LacunaPHP\APIClient\Command\APICommand;


class PushItemsCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$items = [];
		if(is_array($args['items'])) {
			$items = $args['items'];
		}

		$option_names = [
			'ship_id',
			'stay'
		];

		$options = [];
		if(is_array($args['options'])) {
			$options = $args['options'];
		}

		foreach($option_names as $option_name) {
			if(!isset($options[$option_name]) && isset($args[$option_name])) {
				$options[$option_name] = $args[$option_name];
			}
		}

		return [
			$args['session_id'],
			$args['building_id'],
			$args['target_id'],
			$items,
			$options
		];
	}
}
