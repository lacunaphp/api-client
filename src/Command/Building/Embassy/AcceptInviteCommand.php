<?php

namespace LacunaPHP\APIClient\Command\Building\Embassy;

use LacunaPHP\APIClient\Command\APICommand;


class AcceptInviteCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['message'])) {
			return [
				$args['session_id'],
				$args['building_id'],
				$args['invite_id'],
				$args['message']
			];
		}

		return [
			$args['session_id'],
			$args['building_id'],
			$args['invite_id']
		];
	}
}
