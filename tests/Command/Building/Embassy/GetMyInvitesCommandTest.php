<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Embassy;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Embassy\GetMyInvitesCommand;


class GetMyInvitesCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new GetMyInvitesCommand(static::MODULE, static::METHOD, [], []);
	}
}
