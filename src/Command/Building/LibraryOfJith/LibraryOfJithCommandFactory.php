<?php

namespace LacunaPHP\APIClient\Command\Building\LibraryOfJith;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class LibraryOfJithCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'researchspecies':
				return new ResearchSpeciesCommand($this->getName(), 'research_species', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
