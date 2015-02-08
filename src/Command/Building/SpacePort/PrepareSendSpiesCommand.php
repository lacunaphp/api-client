<?php

namespace LacunaPHP\APIClient\Command\Building\SpacePort;

use LacunaPHP\APIClient\Command\APICommand;


class PrepareSendSpiesCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['on_body_id'],
			$args['to_body_id']
		];
	}
}
