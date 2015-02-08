<?php

namespace LacunaPHP\APIClient\Command\Alliance;

use LacunaPHP\APIClient\Command\APICommandFactory;


class AllianceCommandFactory extends APICommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'viewprofile':
				return new ViewProfileCommand($this->getName(), 'view_profile', $args, $options);
			case 'find':
				return new FindCommand($this->getName(), 'find', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
