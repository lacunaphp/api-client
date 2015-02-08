<?php

namespace LacunaPHP\APIClient\Command\Building\SpacePort;

use LacunaPHP\APIClient\Command\APICommand;


class SendFleetCommand extends APICommand {

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

		if(isset($args['set_speed'])) {
			return [
				$args['session_id'],
				$args['ship_ids'],
				$target,
				$args['set_speed']
			];
		}

		return [
			$args['session_id'],
			$args['ship_ids'],
			$target
		];
	}
}
