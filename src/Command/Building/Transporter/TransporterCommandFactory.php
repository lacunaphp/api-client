<?php

namespace LacunaPHP\APIClient\Command\Building\Transporter;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class TransporterCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'addtomarket':
				return new AddToMarketCommand($this->getName(), 'add_to_market', $args, $options);
			case 'getships':
				return new GetShipsCommand($this->getName(), 'get_ships', $args, $options);
			case 'getprisoners':
				return new GetPrisonersCommand($this->getName(), 'get_prisoners', $args, $options);
			case 'getplans': //deprecated, use get_plan_summary instead
			case 'getplansummary':
				return new GetPlanSummaryCommand($this->getName(), 'get_plan_summary', $args, $options);
			case 'getglyphs': //deprecated, use get_glyph_summary instead
			case 'getglyphsummary':
				return new GetGlyphSummaryCommand($this->getName(), 'get_glyph_summary', $args, $options);
			case 'withdrawfrommarket':
				return new WithdrawFromMarketCommand($this->getName(), 'withdraw_from_market', $args, $options);
			case 'acceptfrommarket':
				return new AcceptFromMarketCommand($this->getName(), 'accept_from_market', $args, $options);
			case 'viewmarket':
				return new ViewMarketCommand($this->getName(), 'view_market', $args, $options);
			case 'viewmymarket':
				return new ViewMyMarketCommand($this->getName(), 'view_my_market', $args, $options);
			case 'getstoredresources':
				return new GetStoredResourcesCommand($this->getName(), 'get_stored_resources', $args, $options);
			case 'pushitems':
				return new PushItemsCommand($this->getName(), 'push_items', $args, $options);
			case 'tradeoneforone':
				return new TradeOneForOneCommand($this->getName(), 'trade_one_for_one', $args, $options);
			case 'reportabuse':
				return new ReportAbuseCommand($this->getName(), 'report_abuse', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
