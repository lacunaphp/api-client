<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Embassy;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Embassy\ViewStashCommand;


class ViewStashCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewStashCommand(static::MODULE, static::METHOD, [], []);
	}
}
