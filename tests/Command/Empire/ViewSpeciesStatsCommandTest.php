<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\ViewSpeciesStatsCommand;


class ViewSpeciesStatsCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new ViewSpeciesStatsCommand(static::MODULE, static::METHOD, [], []);
	}
}
