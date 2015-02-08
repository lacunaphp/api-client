<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Parliament;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Parliament\ParliamentCommandFactory;


class ParliamentCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new ParliamentCommandFactory('test');
	}

	public function testGetViewLawsCommand() {
		$this->verifyCommandClass(
			'viewlaws',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ViewLawsCommand'
		);
	}

	public function testGetViewPropositionsCommand() {
		$this->verifyCommandClass(
			'viewpropositions',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ViewPropositionsCommand'
		);
	}

	public function testGetViewTaxesCollectedCommand() {
		$this->verifyCommandClass(
			'viewtaxescollected',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ViewTaxesCollectedCommand'
		);
	}

	public function testGetGetStarsInJurisdictionCommand() {
		$this->verifyCommandClass(
			'getstarsinjurisdiction',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\GetStarsInJurisdictionCommand'
		);
	}

	public function testGetGetBodiesForStarInJurisdictionCommand() {
		$this->verifyCommandClass(
			'getbodiesforstarinjurisdiction',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\GetBodiesForStarInJurisdictionCommand'
		);
	}

	public function testGetGetMiningPlatformsForAsteroidInJurisdictionCommand() {
		$this->verifyCommandClass(
			'getminingplatformsforasteroidinjurisdiction',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\GetMiningPlatformsForAsteroidInJurisdictionCommand'
		);
	}

	public function testGetCastVoteCommand() {
		$this->verifyCommandClass(
			'castvote',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\CastVoteCommand'
		);
	}

	public function testGetProposeWritCommand() {
		$this->verifyCommandClass(
			'proposewrit',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeWritCommand'
		);
	}

	public function testGetProposeRepealLawCommand() {
		$this->verifyCommandClass(
			'proposerepeallaw',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeRepealLawCommand'
		);
	}

	public function testGetProposeTransferStationOwnershipCommand() {
		$this->verifyCommandClass(
			'proposetransferstationownership',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeTransferStationOwnershipCommand'
		);
	}

	public function testGetProposeSeizeStarCommand() {
		$this->verifyCommandClass(
			'proposeseizestar',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeSeizeStarCommand'
		);
	}

	public function testGetProposeRenameStarCommand() {
		$this->verifyCommandClass(
			'proposerenamestar',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeRenameStarCommand'
		);
	}

	public function testGetProposeBroadcastOnNetwork19Command() {
		$this->verifyCommandClass(
			'proposebroadcastonnetwork19',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeBroadcastOnNetwork19Command'
		);
	}

	public function testGetProposeInductMemberCommand() {
		$this->verifyCommandClass(
			'proposeinductmember',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeInductMemberCommand'
		);
	}

	public function testGetProposeExpelMemberCommand() {
		$this->verifyCommandClass(
			'proposeexpelmember',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeExpelMemberCommand'
		);
	}

	public function testGetProposeElectNewLeaderCommand() {
		$this->verifyCommandClass(
			'proposeelectnewleader',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeElectNewLeaderCommand'
		);
	}

	public function testGetProposeRenameAsteroidCommand() {
		$this->verifyCommandClass(
			'proposerenameasteroid',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeRenameAsteroidCommand'
		);
	}

	public function testGetProposeRenameUninhabitedCommand() {
		$this->verifyCommandClass(
			'proposerenameuninhabited',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeRenameUninhabitedCommand'
		);
	}

	public function testGetProposeMembersOnlyMiningRightsCommand() {
		$this->verifyCommandClass(
			'proposemembersonlyminingrights',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeMembersOnlyMiningRightsCommand'
		);
	}

	public function testGetProposeEvictMiningPlatformCommand() {
		$this->verifyCommandClass(
			'proposeevictminingplatform',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeEvictMiningPlatformCommand'
		);
	}

	public function testGetProposeTaxationCommand() {
		$this->verifyCommandClass(
			'proposetaxation',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeTaxationCommand'
		);
	}

	public function testGetProposeForeignAidCommand() {
		$this->verifyCommandClass(
			'proposeforeignaid',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeForeignAidCommand'
		);
	}

	public function testGetProposeMembersOnlyColonizationCommand() {
		$this->verifyCommandClass(
			'proposemembersonlycolonization',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeMembersOnlyColonizationCommand'
		);
	}

	public function testGetProposeMembersOnlyExcavationCommand() {
		$this->verifyCommandClass(
			'proposemembersonlyexcavation',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeMembersOnlyExcavationCommand'
		);
	}

	public function testGetProposeNeutralizeBHGCommand() {
		$this->verifyCommandClass(
			'proposeneutralizebhg',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeNeutralizeBHGCommand'
		);
	}

	public function testGetProposeFireBFGCommand() {
		$this->verifyCommandClass(
			'proposefirebfg',
			'LacunaPHP\\APIClient\\Command\\Building\\Parliament\\ProposeFireBFGCommand'
		);
	}
}
