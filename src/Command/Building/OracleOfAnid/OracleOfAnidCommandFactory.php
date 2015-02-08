<?php

namespace LacunaPHP\APIClient\Command\Building\OracleOfAnid;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class OracleOfAnidCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'getstar':
				return new GetStarCommand($this->getName(), 'get_star', $args, $options);
			case 'getprobedstars':
				return new GetProbedStarsCommand($this->getName(), 'get_probed_stars', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
