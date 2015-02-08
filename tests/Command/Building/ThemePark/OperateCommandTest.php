<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\ThemePark;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\ThemePark\OperateCommand;


class OperateCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new OperateCommand(static::MODULE, static::METHOD, [], []);
	}
}
