<?php

namespace LacunaPHP\APIClient\Command\Building\OracleOfAnid;

use LacunaPHP\APIClient\Command\APICommand;


class GetStarCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['star_id']
		];
	}
}
