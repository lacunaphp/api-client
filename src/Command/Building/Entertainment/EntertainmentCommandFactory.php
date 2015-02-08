<?php

namespace LacunaPHP\APIClient\Command\Building\Entertainment;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class EntertainmentCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'getlotteryvotingoptions':
				return new GetLotteryVotingOptionsCommand($this->getName(), 'get_lottery_voting_options', $args, $options);
			case 'duckquack':
				return new DuckQuackCommand($this->getName(), 'duck_quack', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
