<?php

namespace LacunaPHP\APIClient\Command\Building\SpaceStationLab;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class SpaceStationLabCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'makeplan':
				return new MakePlanCommand($this->getName(), 'make_plan', $args, $options);
			case 'subsidizeplan':
				return new SubsidizePlanCommand($this->getName(), 'subsidize_plan', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
