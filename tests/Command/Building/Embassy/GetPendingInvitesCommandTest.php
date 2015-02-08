<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Embassy;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Embassy\GetPendingInvitesCommand;


class GetPendingInvitesCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetPendingInvitesCommand(static::MODULE, static::METHOD, [], []);
	}
}
