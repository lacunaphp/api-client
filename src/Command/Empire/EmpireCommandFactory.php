<?php

namespace LacunaPHP\APIClient\Command\Empire;

use LacunaPHP\APIClient\Command\APICommandFactory;


class EmpireCommandFactory extends APICommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'isnameavailable':
				return new IsNameAvailableCommand($this->getName(), 'is_name_available', $args, $options);
			case 'logout':
				return new LogoutCommand($this->getName(), 'logout', $args, $options);
			case 'login':
				return new LoginCommand($this->getName(), 'login', $args, $options);
			case 'fetchcaptcha':
				return new FetchCaptchaCommand($this->getName(), 'fetch_captcha', $args, $options);
		//	case 'create':
		//		return new CreateCommand($this->getName(), 'create', $args, $options);
		//	case 'found':
		//		return new FoundCommand($this->getName(), 'found', $args, $options);
			case 'getinvitefriendurl':
				return new GetInviteFriendURLCommand($this->getName(), 'get_invite_friend_url', $args, $options);
			case 'invitefriend':
				return new InviteFriendCommand($this->getName(), 'invite_friend', $args, $options);
			case 'getstatus':
				return new GetStatusCommand($this->getName(), 'get_status', $args, $options);
			case 'viewprofile':
				return new ViewProfileCommand($this->getName(), 'view_profile', $args, $options);
			case 'editprofile':
				return new EditProfileCommand($this->getName(), 'edit_profile', $args, $options);
			case 'viewpublicprofile':
				return new ViewPublicProfileCommand($this->getName(), 'view_public_profile', $args, $options);
			case 'sendpasswordresetmessage':
				return new SendPasswordResetMessageCommand($this->getName(), 'send_password_reset_message', $args, $options);
			case 'resetpassword':
				return new ResetPasswordCommand($this->getName(), 'reset_password', $args, $options);
			case 'changepassword':
				return new ChangePasswordCommand($this->getName(), 'change_password', $args, $options);
			case 'find':
				return new FindCommand($this->getName(), 'find', $args, $options);
			case 'setstatusmessage':
				return new SetStatusMessageCommand($this->getName(), 'set_status_message', $args, $options);
			case 'viewboosts':
				return new ViewBoostsCommand($this->getName(), 'view_boosts', $args, $options);
			case 'booststorage':
				return new BoostStorageCommand($this->getName(), 'boost_storage', $args, $options);
			case 'boostfood':
				return new BoostFoodCommand($this->getName(), 'boost_food', $args, $options);
			case 'boostwater':
				return new BoostWaterCommand($this->getName(), 'boost_water', $args, $options);
			case 'boostenergy':
				return new BoostEnergyCommand($this->getName(), 'boost_energy', $args, $options);
			case 'boostore':
				return new BoostOreCommand($this->getName(), 'boost_ore', $args, $options);
			case 'boosthappiness':
				return new BoostHappinessCommand($this->getName(), 'boost_happiness', $args, $options);
			case 'boostbuilding':
				return new BoostBuildingCommand($this->getName(), 'boost_building', $args, $options);
			case 'spytrainingboost':
				return new SpyTrainingBoostCommand($this->getName(), 'spy_training_boost', $args, $options);
			case 'enableselfdestruct':
				return new EnableSelfDestructCommand($this->getName(), 'enable_self_destruct', $args, $options);
			case 'disableselfdestruct':
				return new DisableSelfDestructCommand($this->getName(), 'disable_self_destruct', $args, $options);
			case 'redeemessentiacode':
				return new RedeemEssentiaCodeCommand($this->getName(), 'redeem_essentia_code', $args, $options);
		//	case 'updatespecies':
		//		return new UpdateSpeciesCommand($this->getName(), 'update_species', $args, $options);
			case 'redefinespecieslimits':
				return new RedefineSpeciesLimitsCommand($this->getName(), 'redefine_species_limits', $args, $options);
			case 'redefinespecies':
				return new RedefineSpeciesCommand($this->getName(), 'redefine_species', $args, $options);
			case 'viewspeciesstats':
				return new ViewSpeciesStatsCommand($this->getName(), 'view_species_stats', $args, $options);
			case 'getspeciestemplates':
				return new GetSpeciesTemplatesCommand($this->getName(), 'get_species_templates', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
