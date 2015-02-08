<?php

namespace LacunaPHP\APIClient\Command\Building\TempleOfTheDrajilites;

use LacunaPHP\APIClient\Command\APICommand;


class ViewPlanetCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['planet_id']
		];
	}
}
