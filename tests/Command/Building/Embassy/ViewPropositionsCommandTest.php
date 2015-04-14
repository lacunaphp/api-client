<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Embassy;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Embassy\ViewPropositionsCommand;


class ViewPropositionsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewPropositionsCommand(static::MODULE, static::METHOD, [], []);
	}
}
