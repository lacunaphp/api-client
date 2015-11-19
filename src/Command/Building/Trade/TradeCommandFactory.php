<?php

namespace LacunaPHP\APIClient\Command\Building\Trade;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class TradeCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'addtomarket':
				return new AddToMarketCommand($this->getName(), 'add_to_market', $args, $options);
			case 'getships':
				return new GetShipsCommand($this->getName(), 'get_ships', $args, $options);
			case 'getshipsummary':
				return new GetShipSummaryCommand($this->getName(), 'get_ship_summary', $args, $options);
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
			case 'gettradeships':
				return new GetTradeShipsCommand($this->getName(), 'get_trade_ships', $args, $options);
			case 'getwasteships':
				return new GetWasteShipsCommand($this->getName(), 'get_waste_ships', $args, $options);
			case 'getsupplyships':
				return new GetSupplyShipsCommand($this->getName(), 'get_supply_ships', $args, $options);
			case 'viewsupplychains':
				return new ViewSupplyChainsCommand($this->getName(), 'view_supply_chains', $args, $options);
			case 'viewwastechains':
				return new ViewWasteChainsCommand($this->getName(), 'view_waste_chains', $args, $options);
			case 'createsupplychain':
				return new CreateSupplyChainCommand($this->getName(), 'create_supply_chain', $args, $options);
			case 'deletesupplychain':
				return new DeleteSupplyChainCommand($this->getName(), 'delete_supply_chain', $args, $options);
			case 'updatesupplychain':
				return new UpdateSupplyChainCommand($this->getName(), 'update_supply_chain', $args, $options);
			case 'updatewastechain':
				return new UpdateWasteChainCommand($this->getName(), 'update_waste_chain', $args, $options);
			case 'addsupplyshiptofleet':
				return new AddSupplyShipToFleetCommand($this->getName(), 'add_supply_ship_to_fleet', $args, $options);
			case 'addwasteshiptofleet':
				return new AddWasteShipToFleetCommand($this->getName(), 'add_waste_ship_to_fleet', $args, $options);
			case 'removesupplyshipfromfleet':
				return new RemoveSupplyShipFromFleetCommand($this->getName(), 'remove_supply_ship_from_fleet', $args, $options);
			case 'removewasteshipfromfleet':
				return new RemoveWasteShipFromFleetCommand($this->getName(), 'remove_waste_ship_from_fleet', $args, $options);
			case 'getstoredresources':
				return new GetStoredResourcesCommand($this->getName(), 'get_stored_resources', $args, $options);
			case 'pushitems':
				return new PushItemsCommand($this->getName(), 'push_items', $args, $options);
			case 'reportabuse':
				return new ReportAbuseCommand($this->getName(), 'report_abuse', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
