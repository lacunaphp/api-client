<?php

namespace LacunaPHP\APIClient\Command\Building\Park;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class ParkCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'throwaparty':
				return new ThrowAPartyCommand($this->getName(), 'throw_a_party', $args, $options);
			case 'subsidizeparty':
				return new SubsidizePartyCommand($this->getName(), 'subsidize_party', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
