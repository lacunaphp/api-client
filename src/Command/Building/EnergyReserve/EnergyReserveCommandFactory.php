<?php

namespace LacunaPHP\APIClient\Command\Building\EnergyReserve;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class EnergyReserveCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'dump':
				return new DumpCommand($this->getName(), 'dump', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
