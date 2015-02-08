<?php

namespace LacunaPHP\APIClient\Tests\Command\Captcha;

use LacunaPHP\APIClient\Tests\Command\SessionCommandTest;
use LacunaPHP\APIClient\Command\Captcha\FetchCommand;


class FetchCommandTest extends SessionCommandTest {

	public function setUp() {
		$this->command = new FetchCommand(static::MODULE, static::METHOD, [], []);
	}
}
