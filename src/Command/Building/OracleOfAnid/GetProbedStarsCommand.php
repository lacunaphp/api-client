<?php

namespace LacunaPHP\APIClient\Command\Building\OracleOfAnid;

use LacunaPHP\APIClient\Command\APICommand;


class GetProbedStarsCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$params = [
			'session_id'  => $args['session_id'],
			'building_id' => $args['building_id']
		];

		if(isset($args['page_number'])) {
			$params['page_number'] = $args['page_number'];
		}

		if(isset($args['page_size'])) {
			$params['page_size'] = $args['page_size'];
		}

		return [
			$params
		];
	}
}
