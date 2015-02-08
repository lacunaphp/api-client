<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Empire\FetchCaptchaCommand;


class FetchCaptchaCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new FetchCaptchaCommand(static::MODULE, static::METHOD, [], []);
	}
}
