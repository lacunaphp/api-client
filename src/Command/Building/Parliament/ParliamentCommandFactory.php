<?php

namespace LacunaPHP\APIClient\Command\Building\Parliament;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class ParliamentCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'viewlaws':
				return new ViewLawsCommand($this->getName(), 'view_laws', $args, $options);
			case 'viewpropositions':
				return new ViewPropositionsCommand($this->getName(), 'view_propositions', $args, $options);
			case 'viewtaxescollected':
				return new ViewTaxesCollectedCommand($this->getName(), 'view_taxes_collected', $args, $options);
			case 'getstarsinjurisdiction':
				return new GetStarsInJurisdictionCommand($this->getName(), 'get_stars_in_jurisdiction', $args, $options);
			case 'getbodiesforstarinjurisdiction':
				return new GetBodiesForStarInJurisdictionCommand($this->getName(), 'get_bodies_for_star_in_jurisdiction', $args, $options);
			case 'getminingplatformsforasteroidinjurisdiction':
				return new GetMiningPlatformsForAsteroidInJurisdictionCommand($this->getName(), 'get_mining_platforms_for_asteroid_in_jurisdiction', $args, $options);
			case 'castvote':
				return new CastVoteCommand($this->getName(), 'cast_vote', $args, $options);
			case 'proposewrit':
				return new ProposeWritCommand($this->getName(), 'propose_writ', $args, $options);
			case 'proposerepeallaw':
				return new ProposeRepealLawCommand($this->getName(), 'propose_repeal_law', $args, $options);
			case 'proposetransferstationownership':
				return new ProposeTransferStationOwnershipCommand($this->getName(), 'propose_transfer_station_ownership', $args, $options);
			case 'proposeseizestar':
				return new ProposeSeizeStarCommand($this->getName(), 'propose_seize_star', $args, $options);
			case 'proposerenamestar':
				return new ProposeRenameStarCommand($this->getName(), 'propose_rename_star', $args, $options);
			case 'proposebroadcastonnetwork19':
				return new ProposeBroadcastOnNetwork19Command($this->getName(), 'propose_broadcast_on_network19', $args, $options);
			case 'proposeinductmember':
				return new ProposeInductMemberCommand($this->getName(), 'propose_induct_member', $args, $options);
			case 'proposeexpelmember':
				return new ProposeExpelMemberCommand($this->getName(), 'propose_expel_member', $args, $options);
			case 'proposeelectnewleader':
				return new ProposeElectNewLeaderCommand($this->getName(), 'propose_elect_new_leader', $args, $options);
			case 'proposerenameasteroid':
				return new ProposeRenameAsteroidCommand($this->getName(), 'propose_rename_asteroid', $args, $options);
			case 'proposerenameuninhabited':
				return new ProposeRenameUninhabitedCommand($this->getName(), 'propose_rename_uninhabited', $args, $options);
			case 'proposemembersonlyminingrights':
				return new ProposeMembersOnlyMiningRightsCommand($this->getName(), 'propose_members_only_mining_rights', $args, $options);
			case 'proposeevictminingplatform':
				return new ProposeEvictMiningPlatformCommand($this->getName(), 'propose_evict_mining_platform', $args, $options);
			case 'proposetaxation':
				return new ProposeTaxationCommand($this->getName(), 'propose_taxation', $args, $options);
			case 'proposeforeignaid':
				return new ProposeForeignAidCommand($this->getName(), 'propose_foreign_aid', $args, $options);
			case 'proposemembersonlycolonization':
				return new ProposeMembersOnlyColonizationCommand($this->getName(), 'propose_members_only_colonization', $args, $options);
			case 'proposemembersonlyexcavation':
				return new ProposeMembersOnlyExcavationCommand($this->getName(), 'propose_members_only_excavation', $args, $options);
			case 'proposeneutralizebhg':
				return new ProposeNeutralizeBHGCommand($this->getName(), 'propose_neutralize_bhg', $args, $options);
			case 'proposefirebfg':
				return new ProposeFireBFGCommand($this->getName(), 'propose_fire_bfg', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
