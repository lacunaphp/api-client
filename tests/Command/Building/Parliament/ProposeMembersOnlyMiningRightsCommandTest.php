<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Parliament;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Parliament\ProposeMembersOnlyMiningRightsCommand;


class ProposeMembersOnlyMiningRightsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ProposeMembersOnlyMiningRightsCommand(static::MODULE, static::METHOD, [], []);
	}
}
