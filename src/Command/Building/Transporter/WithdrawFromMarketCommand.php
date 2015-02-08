<?php

namespace LacunaPHP\APIClient\Command\Building\Transporter;

use LacunaPHP\APIClient\Command\APICommand;


class WithdrawFromMarketCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['trade_id']
		];
	}
}
