<?php

namespace LacunaPHP\APIClient\Command\Building\Network19;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class Network19CommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'restrictcoverage':
				return new RestrictCoverageCommand($this->getName(), 'restrict_coverage', $args, $options);
			case 'viewnews':
				return new ViewNewsCommand($this->getName(), 'view_news', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
