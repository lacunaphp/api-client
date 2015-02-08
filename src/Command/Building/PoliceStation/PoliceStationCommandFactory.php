<?php

namespace LacunaPHP\APIClient\Command\Building\PoliceStation;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class PoliceStationCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'viewprisoners':
				return new ViewPrisonersCommand($this->getName(), 'view_prisoners', $args, $options);
			case 'executeprisoner':
				return new ExecutePrisonerCommand($this->getName(), 'execute_prisoner', $args, $options);
			case 'releaseprisoner':
				return new ReleasePrisonerCommand($this->getName(), 'release_prisoner', $args, $options);
			case 'viewforeignspies':
				return new ViewForeignSpiesCommand($this->getName(), 'view_foreign_spies', $args, $options);
			case 'viewforeignships':
				return new ViewForeignShipsCommand($this->getName(), 'view_foreign_ships', $args, $options);
			case 'viewshipstravelling':
				return new ViewShipsTravellingCommand($this->getName(), 'view_ships_travelling', $args, $options);
			case 'viewshipsorbiting':
				return new ViewShipsOrbitingCommand($this->getName(), 'view_ships_orbiting', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
