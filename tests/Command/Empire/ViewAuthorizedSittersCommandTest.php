<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Empire\ViewAuthorizedSittersCommand;


class ViewAuthorizedSittersCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new ViewAuthorizedSittersCommand(static::MODULE, static::METHOD, [], []);
	}
}
