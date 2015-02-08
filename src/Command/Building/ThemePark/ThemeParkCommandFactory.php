<?php

namespace LacunaPHP\APIClient\Command\Building\ThemePark;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class ThemeParkCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'operate':
				return new OperateCommand($this->getName(), 'operate', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
