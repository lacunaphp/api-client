<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\EmpireCommandTest;
use LacunaPHP\APIClient\Command\Empire\ViewPublicProfileCommand;


class ViewPublicProfileCommandTest extends EmpireCommandTest {

	public function setUp() {
		$this->command = new ViewPublicProfileCommand(static::MODULE, static::METHOD, [], []);
	}
}
