<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Parliament;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Parliament\ProposeMembersOnlyColonizationCommand;


class ProposeMembersOnlyColonizationCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ProposeMembersOnlyColonizationCommand(static::MODULE, static::METHOD, [], []);
	}
}
