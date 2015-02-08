<?php

namespace LacunaPHP\APIClient\Command\Building\BlackHoleGenerator;

use LacunaPHP\APIClient\Command\APICommand;


class GenerateSingularityCommand extends APICommand {

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

		$params_options = [
			'newtype'
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

		$params = [];
		if(is_array($args['params'])) {
			$params = $args['params'];
		}

		foreach($params_options as $option) {
			if(!isset($params[$option]) && isset($args[$option])) {
				$params[$option] = $args[$option];
			}
		}

		if($params) {
			return [[
				'session_id'  => $args['session_id'],
				'building_id' => $args['building_id'],
				'target'      => $target,
				'params'      => $params
			]];
		}

		return [[
			'session_id'  => $args['session_id'],
			'building_id' => $args['building_id'],
			'target'      => $target
		]];
	}
}
