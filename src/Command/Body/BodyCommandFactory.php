<?php

namespace LacunaPHP\APIClient\Command\Body;

use LacunaPHP\APIClient\Command\APICommandFactory;


class BodyCommandFactory extends APICommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'getstatus':
				return new GetStatusCommand($this->getName(), 'get_status', $args, $options);
			case 'getbuildings':
				return new GetBuildingsCommand($this->getName(), 'get_buildings', $args, $options);
			case 'repairlist':
				return new RepairListCommand($this->getName(), 'repair_list', $args, $options);
			case 'rearrangebuildings':
				return new RearrangeBuildingsCommand($this->getName(), 'rearrange_buildings', $args, $options);
			case 'getbuildable':
				return new GetBuildableCommand($this->getName(), 'get_buildable', $args, $options);
			case 'rename':
				return new RenameCommand($this->getName(), 'rename', $args, $options);
			case 'abandon':
				return new AbandonCommand($this->getName(), 'abandon', $args, $options);
			case 'viewlaws':
				return new ViewLawsCommand($this->getName(), 'view_laws', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
