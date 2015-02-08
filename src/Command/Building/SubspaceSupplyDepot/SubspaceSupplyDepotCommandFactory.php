<?php

namespace LacunaPHP\APIClient\Command\Building\SubspaceSupplyDepot;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class SubspaceSupplyDepotCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'transmitfood':
				return new TransmitFoodCommand($this->getName(), 'transmit_food', $args, $options);
			case 'transmitenergy':
				return new TransmitEnergyCommand($this->getName(), 'transmit_energy', $args, $options);
			case 'transmitore':
				return new TransmitOreCommand($this->getName(), 'transmit_ore', $args, $options);
			case 'transmitwater':
				return new TransmitWaterCommand($this->getName(), 'transmit_water', $args, $options);
			case 'completebuildqueue':
				return new CompleteBuildQueueCommand($this->getName(), 'complete_build_queue', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
