<?php

namespace LacunaPHP\APIClient\Command\Building\Security;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class SecurityCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'viewprisoners':
				return new ViewPrisonersCommand($this->getName(), 'view_prisoners', $args, $options);
			case 'executeprisoner':
				return new ExecutePrisonerCommand($this->getName(), 'execute_prisoner', $args, $options);
			case 'releaseprisoner':
				return new ReleasePrisonerCommand($this->getName(), 'release_prisoner', $args, $options);
			case 'viewforeignspies':
				return new ViewForeignSpiesCommand($this->getName(), 'view_foreign_spies', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
