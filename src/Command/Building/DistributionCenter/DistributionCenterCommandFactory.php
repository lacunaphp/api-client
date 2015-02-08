<?php

namespace LacunaPHP\APIClient\Command\Building\DistributionCenter;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class DistributionCenterCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'reserve':
				return new ReserveCommand($this->getName(), 'reserve', $args, $options);
			case 'releasereserve':
				return new ReleaseReserveCommand($this->getName(), 'release_reserve', $args, $options);
			case 'getstoredresources':
				return new GetStoredResourcesCommand($this->getName(), 'get_stored_resources', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
