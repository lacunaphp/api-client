<?php

namespace LacunaPHP\APIClient\Command\Building\MissionCommand;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class MissionCommandCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'getmissions':
				return new GetMissionsCommand($this->getName(), 'get_missions', $args, $options);
			case 'completemission':
				return new CompleteMissionCommand($this->getName(), 'complete_mission', $args, $options);
			case 'skipmission':
				return new SkipMissionCommand($this->getName(), 'skip_mission', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
