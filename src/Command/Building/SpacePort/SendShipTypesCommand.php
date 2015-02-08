<?php

namespace LacunaPHP\APIClient\Command\Building\SpacePort;

use LacunaPHP\APIClient\Command\APICommand;


class SendShipTypesCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$target_options = [
			'body_name',
			'body_id',
			'star_name',
			'star_id',
			'x',
			'y'
		];

		$target = [];
		if(is_array($args['target'])) {
			$target = $args['target'];
		}

		foreach($target_options as $option) {
			if(!isset($target[$option]) && isset($args[$option])) {
				$target[$option] = $args[$option];
			}
		}

		$arrival_options = [
			'day',
			'hour',
			'minute',
			'second'
		];

		$arrival = [];
		if(is_array($args['arrival'])) {
			$arrival = $args['arrival'];
		}
		
		foreach($arrival_options as $option) {
			if(!isset($arrival[$option]) && isset($args[$option])) {
				$arrival[$option] = $args[$option];
			}
		}

		return [
			$args['session_id'],
			$args['from_body_id'],
			$target,
			$args['types'],
			$arrival
		];
	}
}
