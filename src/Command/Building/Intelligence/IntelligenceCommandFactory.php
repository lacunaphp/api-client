<?php

namespace LacunaPHP\APIClient\Command\Building\Intelligence;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class IntelligenceCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'trainspy':
				return new TrainSpyCommand($this->getName(), 'train_spy', $args, $options);
			case 'viewspies':
				return new ViewSpiesCommand($this->getName(), 'view_spies', $args, $options);
			case 'viewallspies':
				return new ViewAllSpiesCommand($this->getName(), 'view_all_spies', $args, $options);
			case 'subsidizetraining':
				return new SubsidizeTrainingCommand($this->getName(), 'subsidize_training', $args, $options);
			case 'burnspy':
				return new BurnSpyCommand($this->getName(), 'burn_spy', $args, $options);
			case 'namespy':
				return new NameSpyCommand($this->getName(), 'name_spy', $args, $options);
			case 'assignspy':
				return new AssignSpyCommand($this->getName(), 'assign_spy', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
