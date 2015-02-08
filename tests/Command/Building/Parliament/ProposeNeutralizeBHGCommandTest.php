<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Parliament;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Parliament\ProposeNeutralizeBHGCommand;


class ProposeNeutralizeBHGCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ProposeNeutralizeBHGCommand(static::MODULE, static::METHOD, [], []);
	}
}
