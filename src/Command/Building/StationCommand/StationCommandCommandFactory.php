<?php

namespace LacunaPHP\APIClient\Command\Building\StationCommand;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class StationCommandCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'viewplans':
				return new ViewPlansCommand($this->getName(), 'view_plans', $args, $options);
			case 'viewincomingsupplychains':
				return new ViewIncomingSupplyChainsCommand($this->getName(), 'view_incoming_supply_chains', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
