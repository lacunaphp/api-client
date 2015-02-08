<?php

namespace LacunaPHP\APIClient\Command\Building\TempleOfTheDrajilites;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class TempleOfTheDrajilitesCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'listplanets':
				return new ListPlanetsCommand($this->getName(), 'list_planets', $args, $options);
			case 'viewplanet':
				return new ViewPlanetCommand($this->getName(), 'view_planet', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
