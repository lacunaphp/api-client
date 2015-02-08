<?php

namespace LacunaPHP\APIClient\Command\Building\Development;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class DevelopmentCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'subsidizebuildqueue':
				return new SubsidizeBuildQueueCommand($this->getName(), 'subsidize_build_queue', $args, $options);
			case 'subsidizeonebuild':
				return new SubsidizeOneBuildCommand($this->getName(), 'subsidize_one_build', $args, $options);
			case 'cancelbuild':
				return new CancelBuildCommand($this->getName(), 'cancel_build', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
