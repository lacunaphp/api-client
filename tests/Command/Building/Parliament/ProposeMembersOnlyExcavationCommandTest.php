<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Parliament;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Parliament\ProposeMembersOnlyExcavationCommand;


class ProposeMembersOnlyExcavationCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ProposeMembersOnlyExcavationCommand(static::MODULE, static::METHOD, [], []);
	}
}
