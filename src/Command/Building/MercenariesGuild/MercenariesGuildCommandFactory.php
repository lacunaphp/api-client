<?php

namespace LacunaPHP\APIClient\Command\Building\MercenariesGuild;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class MercenariesGuildCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'addtomarket':
				return new AddToMarketCommand($this->getName(), 'add_to_market', $args, $options);
			case 'getspies':
				return new GetSpiesCommand($this->getName(), 'get_spies', $args, $options);
			case 'withdrawfrommarket':
				return new WithdrawFromMarketCommand($this->getName(), 'withdraw_from_market', $args, $options);
			case 'acceptfrommarket':
				return new AcceptFromMarketCommand($this->getName(), 'accept_from_market', $args, $options);
			case 'viewmarket':
				return new ViewMarketCommand($this->getName(), 'view_market', $args, $options);
			case 'viewmymarket':
				return new ViewMyMarketCommand($this->getName(), 'view_my_market', $args, $options);
			case 'gettradeships':
				return new GetTradeShipsCommand($this->getName(), 'get_trade_ships', $args, $options);
			case 'reportabuse':
				return new ReportAbuseCommand($this->getName(), 'report_abuse', $args, $options);

		}

		return parent::getCommand($name, $args, $options);
	}
}
