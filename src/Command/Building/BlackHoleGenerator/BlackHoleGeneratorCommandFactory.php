<?php

namespace LacunaPHP\APIClient\Command\Building\BlackHoleGenerator;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class BlackHoleGeneratorCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'generatesingularity':
				return new GenerateSingularityCommand($this->getName(), 'generate_singularity', $args, $options);
			case 'getactionsfor':
				return new GetActionsForCommand($this->getName(), 'get_actions_for', $args, $options);
			case 'subsidizecooldown':
				return new SubsidizeCooldownCommand($this->getName(), 'subsidize_cooldown', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
