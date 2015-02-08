<?php

namespace LacunaPHP\APIClient\Command\Building;

use LacunaPHP\APIClient\Command\APICommandFactory;


class BuildingCommandFactory extends APICommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'build':
				return new BuildCommand($this->getName(), 'build', $args, $options);
			case 'view':
				return new ViewCommand($this->getName(), 'view', $args, $options);
			case 'upgrade':
				return new UpgradeCommand($this->getName(), 'upgrade', $args, $options);
			case 'demolish':
				return new DemolishCommand($this->getName(), 'demolish', $args, $options);
			case 'downgrade':
				return new DowngradeCommand($this->getName(), 'downgrade', $args, $options);
			case 'getstatsforlevel':
				return new GetStatsForLevelCommand($this->getName(), 'get_stats_for_level', $args, $options);
			case 'repair':
				return new RepairCommand($this->getName(), 'repair', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
