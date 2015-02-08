<?php

namespace LacunaPHP\APIClient\Command\Building\BlackHoleGenerator;

use LacunaPHP\APIClient\Command\APICommand;


class GetActionsForCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$target_options = [
			'body_name',
			'body_id',
			'star_name',
			'star_id',
			'x',
			'y',
			'zone'
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

		return [
			$args['session_id'],
			$args['building_id'],
			$target
		];
	}
}
