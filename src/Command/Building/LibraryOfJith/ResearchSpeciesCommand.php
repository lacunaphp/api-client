<?php

namespace LacunaPHP\APIClient\Command\Building\LibraryOfJith;

use LacunaPHP\APIClient\Command\APICommand;


class ResearchSpeciesCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['building_id'],
			$args['empire_id']
		];
	}
}
