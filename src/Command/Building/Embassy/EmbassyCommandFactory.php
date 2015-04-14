<?php

namespace LacunaPHP\APIClient\Command\Building\Embassy;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class EmbassyCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'createalliance':
				return new CreateAllianceCommand($this->getName(), 'create_alliance', $args, $options);
			case 'dissolvealliance':
				return new DissolveAllianceCommand($this->getName(), 'dissolve_alliance', $args, $options);
			case 'getalliancestatus':
				return new GetAllianceStatusCommand($this->getName(), 'get_alliance_status', $args, $options);
			case 'sendinvite':
				return new SendInviteCommand($this->getName(), 'send_invite', $args, $options);
			case 'withdrawinvite':
				return new WithdrawInviteCommand($this->getName(), 'withdraw_invite', $args, $options);
			case 'acceptinvite':
				return new AcceptInviteCommand($this->getName(), 'accept_invite', $args, $options);
			case 'rejectinvite':
				return new RejectInviteCommand($this->getName(), 'reject_invite', $args, $options);
			case 'getpendinginvites':
				return new GetPendingInvitesCommand($this->getName(), 'get_pending_invites', $args, $options);
			case 'getmyinvites':
				return new GetMyInvitesCommand($this->getName(), 'get_my_invites', $args, $options);
			case 'assignallianceleader':
				return new AssignAllianceLeaderCommand($this->getName(), 'assign_alliance_leader', $args, $options);
			case 'updatealliance':
				return new UpdateAllianceCommand($this->getName(), 'update_alliance', $args, $options);
			case 'leavealliance':
				return new LeaveAllianceCommand($this->getName(), 'leave_alliance', $args, $options);
			case 'expelmember':
				return new ExpelMemberCommand($this->getName(), 'expel_member', $args, $options);
			case 'viewstash':
				return new ViewStashCommand($this->getName(), 'view_stash', $args, $options);
			case 'donatetostash':
				return new DonateToStashCommand($this->getName(), 'donate_to_stash', $args, $options);
			case 'exchangewithstash':
				return new ExchangeWithStashCommand($this->getName(), 'exchange_with_stash', $args, $options);
			case 'viewpropositions':
				return new ViewPropositionsCommand($this->getName(), 'view_propositions', $args, $options);
			case 'castvote':
				return new CastVoteCommand($this->getName(), 'cast_vote', $args, $options);

		}

		return parent::getCommand($name, $args, $options);
	}
}
