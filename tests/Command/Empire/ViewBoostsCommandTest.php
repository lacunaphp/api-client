<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\ViewBoostsCommand;


class ViewBoostsCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new ViewBoostsCommand(static::MODULE, static::METHOD, [], []);
	}
}
