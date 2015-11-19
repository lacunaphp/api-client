<?php

namespace LacunaPHP\APIClient\Command\Building\Shipyard;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class ShipyardCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'viewbuildqueue':
				return new ViewBuildQueueCommand($this->getName(), 'view_build_queue', $args, $options);
			case 'subsidizebuildqueue':
				return new SubsidizeBuildQueueCommand($this->getName(), 'subsidize_build_queue', $args, $options);
			case 'subsidizeship':
				return new SubsidizeShipCommand($this->getName(), 'subsidize_ship', $args, $options);
			case 'getbuildable':
				return new GetBuildableCommand($this->getName(), 'get_buildable', $args, $options);
			case 'buildship':
				return new BuildShipCommand($this->getName(), 'build_ship', $args, $options);
			case 'buildships':
				return new BuildShipsCommand($this->getName(), 'build_ships', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
