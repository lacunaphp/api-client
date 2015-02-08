<?php

namespace LacunaPHP\APIClient\Command\Empire;

use LacunaPHP\APIClient\Command\APICommand;


class InviteFriendCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['custom_message'])) {
			return [
				$args['session_id'],
				$args['email'],
				$args['custom_message']
			];
		}

		return [
			$args['session_id'],
			$args['email']
		];
	}
}
