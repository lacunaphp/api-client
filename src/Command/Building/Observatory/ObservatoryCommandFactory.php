<?php

namespace LacunaPHP\APIClient\Command\Building\Observatory;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class ObservatoryCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'getprobedstars':
				return new GetProbedStarsCommand($this->getName(), 'get_probed_stars', $args, $options);
			case 'abandonprobe':
				return new AbandonProbeCommand($this->getName(), 'abandon_probe', $args, $options);
			case 'abandonallprobes':
				return new AbandonAllProbesCommand($this->getName(), 'abandon_all_probes', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
