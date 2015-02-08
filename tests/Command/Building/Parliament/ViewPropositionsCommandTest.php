<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Parliament;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Parliament\ViewPropositionsCommand;


class ViewPropositionsCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewPropositionsCommand(static::MODULE, static::METHOD, [], []);
	}
}
