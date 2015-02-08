<?php

namespace LacunaPHP\APIClient\Command\Building\Trade;

use LacunaPHP\APIClient\Command\APICommand;


class AddToMarketCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$items = [];
		if(is_array($args['items'])) {
			$items = $args['items'];
		} elseif(is_array($args['offer'])) {
			$items = $args['offer'];
		}

		$option_names = [
			'ship_id'
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
			$items,
			$args['ask'],
			$options
		];
	}
}
