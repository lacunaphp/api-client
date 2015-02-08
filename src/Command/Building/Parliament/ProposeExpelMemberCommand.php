<?php

namespace LacunaPHP\APIClient\Command\Building\Parliament;

use LacunaPHP\APIClient\Command\APICommand;


class ProposeExpelMemberCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['message'])) {
			return [
				$args['session_id'],
				$args['building_id'],
				$args['empire_id'],
				$args['message']
			];
		}

		return [
			$args['session_id'],
			$args['building_id'],
			$args['empire_id']
		];
	}
}
