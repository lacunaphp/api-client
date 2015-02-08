<?php

namespace LacunaPHP\APIClient\Command\Building\WasteExchanger;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class WasteExchangerCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'recycle':
				return new RecycleCommand($this->getName(), 'recycle', $args, $options);
			case 'subsidizerecycling':
				return new SubsidizeRecyclingCommand($this->getName(), 'subsidize_recycling', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
