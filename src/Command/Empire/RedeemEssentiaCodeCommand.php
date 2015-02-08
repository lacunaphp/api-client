<?php

namespace LacunaPHP\APIClient\Command\Empire;

use LacunaPHP\APIClient\Command\APICommand;


class RedeemEssentiaCodeCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['code']
		];
	}
}
