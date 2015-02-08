<?php

namespace LacunaPHP\APIClient\Command\Building\TheDillonForge;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class TheDillonForgeCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'makeplan':
				return new MakePlanCommand($this->getName(), 'make_plan', $args, $options);
			case 'splitplan':
				return new SplitPlanCommand($this->getName(), 'split_plan', $args, $options);
			case 'subsidize':
				return new SubsidizeCommand($this->getName(), 'subsidize', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
