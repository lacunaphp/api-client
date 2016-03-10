<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandFactoryTest;
use LacunaPHP\APIClient\Command\Empire\EmpireCommandFactory;


class EmpireCommandFactoryTest extends APICommandFactoryTest {

	public function setUp() {
		$this->factory = new EmpireCommandFactory('test');
	}

	public function testGetBoostBuildingCommand() {
		$this->verifyCommandClass(
			'boostbuilding',
			'LacunaPHP\\APIClient\\Command\\Empire\\BoostBuildingCommand'
		);
	}

	public function testGetBoostEnergyCommand() {
		$this->verifyCommandClass(
			'boostenergy',
			'LacunaPHP\\APIClient\\Command\\Empire\\BoostEnergyCommand'
		);
	}

	public function testGetBoostFoodCommand() {
		$this->verifyCommandClass(
			'boostfood',
			'LacunaPHP\\APIClient\\Command\\Empire\\BoostFoodCommand'
		);
	}

	public function testGetBoostHappinessCommand() {
		$this->verifyCommandClass(
			'boosthappiness',
			'LacunaPHP\\APIClient\\Command\\Empire\\BoostHappinessCommand'
		);
	}

	public function testGetBoostOreCommand() {
		$this->verifyCommandClass(
			'boostore',
			'LacunaPHP\\APIClient\\Command\\Empire\\BoostOreCommand'
		);
	}

	public function testGetBoostStorageCommand() {
		$this->verifyCommandClass(
			'booststorage',
			'LacunaPHP\\APIClient\\Command\\Empire\\BoostStorageCommand'
		);
	}

	public function testGetBoostWaterCommand() {
		$this->verifyCommandClass(
			'boostwater',
			'LacunaPHP\\APIClient\\Command\\Empire\\BoostWaterCommand'
		);
	}

	public function testGetChangePasswordCommand() {
		$this->verifyCommandClass(
			'changepassword',
			'LacunaPHP\\APIClient\\Command\\Empire\\ChangePasswordCommand'
		);
	}

	public function testGetDisableSelfDestructCommand() {
		$this->verifyCommandClass(
			'disableselfdestruct',
			'LacunaPHP\\APIClient\\Command\\Empire\\DisableSelfDestructCommand'
		);
	}

	public function testGetEditProfileCommand() {
		$this->verifyCommandClass(
			'editprofile',
			'LacunaPHP\\APIClient\\Command\\Empire\\EditProfileCommand'
		);
	}

	public function testGetEnableSelfDestructCommand() {
		$this->verifyCommandClass(
			'enableselfdestruct',
			'LacunaPHP\\APIClient\\Command\\Empire\\EnableSelfDestructCommand'
		);
	}

	public function testGetFetchCaptchaCommand() {
		$this->verifyCommandClass(
			'fetchcaptcha',
			'LacunaPHP\\APIClient\\Command\\Empire\\FetchCaptchaCommand'
		);
	}

	public function testGetFindCommand() {
		$this->verifyCommandClass(
			'find',
			'LacunaPHP\\APIClient\\Command\\Empire\\FindCommand'
		);
	}

	public function testGetGetInviteFriendURLCommand() {
		$this->verifyCommandClass(
			'getinvitefriendurl',
			'LacunaPHP\\APIClient\\Command\\Empire\\GetInviteFriendURLCommand'
		);
	}

	public function testGetGetSpeciesTemplatesCommand() {
		$this->verifyCommandClass(
			'getspeciestemplates',
			'LacunaPHP\\APIClient\\Command\\Empire\\GetSpeciesTemplatesCommand'
		);
	}

	public function testGetGetStatusCommand() {
		$this->verifyCommandClass(
			'getstatus',
			'LacunaPHP\\APIClient\\Command\\Empire\\GetStatusCommand'
		);
	}

	public function testGetInviteFriendCommand() {
		$this->verifyCommandClass(
			'invitefriend',
			'LacunaPHP\\APIClient\\Command\\Empire\\InviteFriendCommand'
		);
	}

	public function testGetIsNameAvailableCommand() {
		$this->verifyCommandClass(
			'isnameavailable',
			'LacunaPHP\\APIClient\\Command\\Empire\\IsNameAvailableCommand'
		);
	}

	public function testGetLoginCommand() {
		$this->verifyCommandClass(
			'login',
			'LacunaPHP\\APIClient\\Command\\Empire\\LoginCommand'
		);
	}

	public function testGetLogoutCommand() {
		$this->verifyCommandClass(
			'logout',
			'LacunaPHP\\APIClient\\Command\\Empire\\LogoutCommand'
		);
	}

	public function testGetRedeemEssentiaCodeCommand() {
		$this->verifyCommandClass(
			'redeemessentiacode',
			'LacunaPHP\\APIClient\\Command\\Empire\\RedeemEssentiaCodeCommand'
		);
	}

	public function testGetRedefineSpeciesCommand() {
		$this->verifyCommandClass(
			'redefinespecies',
			'LacunaPHP\\APIClient\\Command\\Empire\\RedefineSpeciesCommand'
		);
	}

	public function testGetRedefineSpeciesLimitsCommand() {
		$this->verifyCommandClass(
			'redefinespecieslimits',
			'LacunaPHP\\APIClient\\Command\\Empire\\RedefineSpeciesLimitsCommand'
		);
	}

	public function testGetResetPasswordCommand() {
		$this->verifyCommandClass(
			'resetpassword',
			'LacunaPHP\\APIClient\\Command\\Empire\\ResetPasswordCommand'
		);
	}

	public function testGetSendPasswordResetMessageCommand() {
		$this->verifyCommandClass(
			'sendpasswordresetmessage',
			'LacunaPHP\\APIClient\\Command\\Empire\\SendPasswordResetMessageCommand'
		);
	}

	public function testGetSetStatusMessageCommand() {
		$this->verifyCommandClass(
			'setstatusmessage',
			'LacunaPHP\\APIClient\\Command\\Empire\\SetStatusMessageCommand'
		);
	}

	public function testGetSpyTrainingBoostCommand() {
		$this->verifyCommandClass(
			'spytrainingboost',
			'LacunaPHP\\APIClient\\Command\\Empire\\SpyTrainingBoostCommand'
		);
	}

	public function testGetViewBoostsCommand() {
		$this->verifyCommandClass(
			'viewboosts',
			'LacunaPHP\\APIClient\\Command\\Empire\\ViewBoostsCommand'
		);
	}

	public function testGetViewProfileCommand() {
		$this->verifyCommandClass(
			'viewprofile',
			'LacunaPHP\\APIClient\\Command\\Empire\\ViewProfileCommand'
		);
	}

	public function testGetViewPublicProfileCommand() {
		$this->verifyCommandClass(
			'viewpublicprofile',
			'LacunaPHP\\APIClient\\Command\\Empire\\ViewPublicProfileCommand'
		);
	}

	public function testGetViewSpeciesStatsCommand() {
		$this->verifyCommandClass(
			'viewspeciesstats',
			'LacunaPHP\\APIClient\\Command\\Empire\\ViewSpeciesStatsCommand'
		);
	}



	public function testGetViewAuthorizedSittersCommand() {
		$this->verifyCommandClass(
			'viewauthorizedsitters',
			'LacunaPHP\\APIClient\\Command\\Empire\\ViewAuthorizedSittersCommand'
		);
	}

	public function testGetAuthorizeSittersCommand() {
		$this->verifyCommandClass(
			'authorizesitters',
			'LacunaPHP\\APIClient\\Command\\Empire\\AuthorizeSittersCommand'
		);
	}

	public function testGetDeauthorizeSittersCommand() {
		$this->verifyCommandClass(
			'deauthorizesitters',
			'LacunaPHP\\APIClient\\Command\\Empire\\DeauthorizeSittersCommand'
		);
	}
}
