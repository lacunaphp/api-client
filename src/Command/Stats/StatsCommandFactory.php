<?php

namespace LacunaPHP\APIClient\Command\Stats;

use LacunaPHP\APIClient\Command\APICommandFactory;


class StatsCommandFactory extends APICommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'credits':
				return new CreditsCommand($this->getName(), 'view_inbox', $args, $options);
			case 'alliancerank':
				return new AllianceRankCommand($this->getName(), 'alliance_rank', $args, $options);
			case 'findalliancerank':
				return new FindAllianceRankCommand($this->getName(), 'find_alliance_rank', $args, $options);
			case 'empirerank':
				return new EmpireRankCommand($this->getName(), 'find_empire_rank', $args, $options);
			case 'findempirerank':
				return new FindEmpireRankCommand($this->getName(), 'find_empire_rank', $args, $options);
			case 'colonyrank':
				return new ColonyRankCommand($this->getName(), 'colony_rank', $args, $options);
			case 'spyrank':
				return new SpyRankCommand($this->getName(), 'spy_rank', $args, $options);
			case 'weeklymedalwinners':
				return new WeeklyMedalWinnersCommand($this->getName(), 'weekly_medal_winners', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
