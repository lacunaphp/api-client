<?php

namespace LacunaPHP\APIClient\Command\Map;

use LacunaPHP\APIClient\Command\APICommandFactory;


class MapCommandFactory extends APICommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'getstarmap':
				return new GetStarMapCommand($this->getName(), 'get_star_map', $args, $options);
			case 'getstars':
				return new GetStarsCommand($this->getName(), 'get_stars', $args, $options);
			case 'checkstarforincomingprobe':
				return new CheckStarForIncomingProbeCommand($this->getName(), 'check_star_for_incoming_probe', $args, $options);
			case 'getstar':
				return new GetStarCommand($this->getName(), 'get_star', $args, $options);
			case 'getstarbyname':
				return new GetStarByNameCommand($this->getName(), 'get_star_by_name', $args, $options);
			case 'getstarbyxy':
				return new GetStarByXYCommand($this->getName(), 'get_star_by_xy', $args, $options);
			case 'searchstars':
				return new SearchStarsCommand($this->getName(), 'search_stars', $args, $options);
			case 'probesummaryfissures':
				return new ProbeSummaryFissuresCommand($this->getName(), 'probe_summary_fissures', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
