<?php

namespace LacunaPHP\APIClient\Command\Building\Capitol;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class CapitolCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'renameempire':
				return new RenameEmpireCommand($this->getName(), 'rename_empire', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
