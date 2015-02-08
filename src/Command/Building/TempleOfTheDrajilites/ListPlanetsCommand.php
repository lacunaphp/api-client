<?php

namespace LacunaPHP\APIClient\Command\Building\TempleOfTheDrajilites;

use LacunaPHP\APIClient\Command\APICommand;


class ListPlanetsCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['star_id'])) {
			return [
				$args['session_id'],
				$args['building_id'],
				$args['star_id']
			];
		}

		return [
			$args['session_id'],
			$args['building_id']
		];
	}
}
