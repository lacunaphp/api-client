<?php

namespace LacunaPHP\APIClient\Command\Building\SpacePort;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class SpacePortCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'viewallships':
				return new ViewAllShipsCommand($this->getName(), 'view_all_ships', $args, $options);
			case 'viewforeignships':
				return new ViewForeignShipsCommand($this->getName(), 'view_foreign_ships', $args, $options);
			case 'getfleetfor':
				return new GetFleetForCommand($this->getName(), 'get_fleet_for', $args, $options);
			case 'getshipsfor':
				return new GetShipsForCommand($this->getName(), 'get_ships_for', $args, $options);
			case 'sendship':
				return new SendShipCommand($this->getName(), 'send_ship', $args, $options);
			case 'sendshiptypes':
				return new SendShipTypesCommand($this->getName(), 'send_ship_types', $args, $options);
			case 'sendfleet':
				return new SendFleetCommand($this->getName(), 'send_fleet', $args, $options);
			case 'recallship':
				return new RecallShipCommand($this->getName(), 'recall_ship', $args, $options);
			case 'recallall':
				return new RecallAllCommand($this->getName(), 'recall_all', $args, $options);
			case 'nameship':
				return new NameShipCommand($this->getName(), 'name_ship', $args, $options);
			case 'scuttleship':
				return new ScuttleShipCommand($this->getName(), 'scuttle_ship', $args, $options);
			case 'massscuttleship':
				return new MassScuttleShipCommand($this->getName(), 'mass_scuttle_ship', $args, $options);
			case 'viewshipstravelling':
				return new ViewShipsTravellingCommand($this->getName(), 'view_ships_travelling', $args, $options);
			case 'viewshipsorbiting':
				return new ViewShipsOrbitingCommand($this->getName(), 'view_ships_orbiting', $args, $options);
			case 'preparesendspies':
				return new PrepareSendSpiesCommand($this->getName(), 'prepare_send_spies', $args, $options);
			case 'sendspies':
				return new SendSpiesCommand($this->getName(), 'send_spies', $args, $options);
			case 'preparefetchspies':
				return new PrepareFetchSpiesCommand($this->getName(), 'prepare_fetch_spies', $args, $options);
			case 'fetchspies':
				return new FetchSpiesCommand($this->getName(), 'fetch_spies', $args, $options);
			case 'viewbattlelogs':
				return new ViewBattleLogsCommand($this->getName(), 'view_battle_logs', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
