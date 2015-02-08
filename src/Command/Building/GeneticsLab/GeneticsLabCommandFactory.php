<?php

namespace LacunaPHP\APIClient\Command\Building\GeneticsLab;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class GeneticsLabCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'prepareexperiment':
				return new PrepareExperimentCommand($this->getName(), 'prepare_experiment', $args, $options);
			case 'runexperiment':
				return new RunExperimentCommand($this->getName(), 'run_experiment', $args, $options);
			case 'renamespecies':
				return new RenameSpeciesCommand($this->getName(), 'rename_species', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
