<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\GetInviteFriendURLCommand;


class GetInviteFriendURLCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new GetInviteFriendURLCommand(static::MODULE, static::METHOD, [], []);
	}
}
