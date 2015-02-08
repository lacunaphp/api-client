<?php

namespace LacunaPHP\APIClient\Command\Building\GeneticsLab;

use LacunaPHP\APIClient\Command\APICommand;


class RenameSpeciesCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$param_options = [
			'name',
			'description'
		];

		$params = [];
		if(is_array($args['params'])) {
			$params = $args['params'];
		}

		foreach($param_options as $option) {
			if(!isset($params[$option]) && isset($args[$option])) {
				$params[$option] = $args[$option];
			}
		}

		return [
			$args['session_id'],
			$args['building_id'],
			$params
		];
	}
}
