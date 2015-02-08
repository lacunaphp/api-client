<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Embassy;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Embassy\EmbassyCommandFactory;


class EmbassyCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new EmbassyCommandFactory('test');
	}

	public function testGetCreateAllianceCommand() {
		$this->verifyCommandClass(
			'createalliance',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\CreateAllianceCommand'
		);
	}

	public function testGetDissolveAllianceCommand() {
		$this->verifyCommandClass(
			'dissolvealliance',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\DissolveAllianceCommand'
		);
	}

	public function testGetGetAllianceStatusCommand() {
		$this->verifyCommandClass(
			'getalliancestatus',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\GetAllianceStatusCommand'
		);
	}

	public function testGetSendInviteCommand() {
		$this->verifyCommandClass(
			'sendinvite',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\SendInviteCommand'
		);
	}

	public function testGetWithdrawInviteCommand() {
		$this->verifyCommandClass(
			'withdrawinvite',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\WithdrawInviteCommand'
		);
	}

	public function testGetAcceptInviteCommand() {
		$this->verifyCommandClass(
			'acceptinvite',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\AcceptInviteCommand'
		);
	}

	public function testGetRejectInviteCommand() {
		$this->verifyCommandClass(
			'rejectinvite',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\RejectInviteCommand'
		);
	}

	public function testGetGetPendingInvitesCommand() {
		$this->verifyCommandClass(
			'getpendinginvites',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\GetPendingInvitesCommand'
		);
	}

	public function testGetGetMyInvitesCommand() {
		$this->verifyCommandClass(
			'getmyinvites',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\GetMyInvitesCommand'
		);
	}

	public function testGetAssignAllianceLeaderCommand() {
		$this->verifyCommandClass(
			'assignallianceleader',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\AssignAllianceLeaderCommand'
		);
	}

	public function testGetUpdateAllianceCommand() {
		$this->verifyCommandClass(
			'updatealliance',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\UpdateAllianceCommand'
		);
	}

	public function testGetLeaveAllianceCommand() {
		$this->verifyCommandClass(
			'leavealliance',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\LeaveAllianceCommand'
		);
	}

	public function testGetExpelMemberCommand() {
		$this->verifyCommandClass(
			'expelmember',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\ExpelMemberCommand'
		);
	}

	public function testGetViewStashCommand() {
		$this->verifyCommandClass(
			'viewstash',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\ViewStashCommand'
		);
	}

	public function testGetDonateToStashCommand() {
		$this->verifyCommandClass(
			'donatetostash',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\DonateToStashCommand'
		);
	}

	public function testGetExchangeWithStashCommand() {
		$this->verifyCommandClass(
			'exchangewithstash',
			'LacunaPHP\\APIClient\\Command\\Building\\Embassy\\ExchangeWithStashCommand'
		);
	}
}
