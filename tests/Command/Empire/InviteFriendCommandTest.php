<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Empire\InviteFriendCommand;


class InviteFriendCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new InviteFriendCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$email = 'EMAIL';
		$custom_message = 'CUSTOM-MESSAGE';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'email' => $email],
			[$session_id, $email]
		);

		$this->verifyCommandParams(
			['session_id' => $session_id, 'email' => $email, 'custom_message' => $custom_message],
			[$session_id, $email, $custom_message]
		);
	}
}
