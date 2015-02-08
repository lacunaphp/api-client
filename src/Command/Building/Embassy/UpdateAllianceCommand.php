<?php

namespace LacunaPHP\APIClient\Command\Building\Embassy;

use LacunaPHP\APIClient\Command\APICommand;


class UpdateAllianceCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$params_options = [
			'forum_uri',
			'description',
			'announcements'
		];

		$params = [];
		if(is_array($args['params'])) {
			$params = $args['params'];
		}

		foreach($params_options as $option) {
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
