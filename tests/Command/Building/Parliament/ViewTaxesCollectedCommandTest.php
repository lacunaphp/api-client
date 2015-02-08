<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Parliament;

use LacunaPHP\APIClient\Tests\Command\BuildingCommandTest;
use LacunaPHP\APIClient\Command\Building\Parliament\ViewTaxesCollectedCommand;


class ViewTaxesCollectedCommandTest extends BuildingCommandTest {

	public function setUp() {
		$this->command = new ViewTaxesCollectedCommand(static::MODULE, static::METHOD, [], []);
	}
}
