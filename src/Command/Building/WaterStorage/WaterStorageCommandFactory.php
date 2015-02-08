<?php

namespace LacunaPHP\APIClient\Command\Building\WaterStorage;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class WaterStorageCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'dump':
				return new DumpCommand($this->getName(), 'dump', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
