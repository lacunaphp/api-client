<?php

namespace LacunaPHP\APIClient\Command\Building\MiningMinistry;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class MiningMinistryCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'viewplatforms':
				return new ViewPlatformsCommand($this->getName(), 'view_platforms', $args, $options);
			case 'viewships':
				return new ViewShipsCommand($this->getName(), 'view_ships', $args, $options);
			case 'addcargoshiptofleet':
				return new AddCargoShipToFleetCommand($this->getName(), 'add_cargo_ship_to_fleet', $args, $options);
			case 'removecargoshipfromfleet':
				return new RemoveCargoShipFromFleetCommand($this->getName(), 'remove_cargo_ship_from_fleet', $args, $options);
			case 'abandonplatform':
				return new AbandonPlatformCommand($this->getName(), 'abandon_platform', $args, $options);
			case 'massabandonplatform':
				return new MassAbandonPlatformCommand($this->getName(), 'mass_abandon_platform', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
