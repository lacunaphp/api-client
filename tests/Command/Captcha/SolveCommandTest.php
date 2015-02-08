<?php

namespace LacunaPHP\APIClient\Tests\Command\Captcha;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Captcha\SolveCommand;


class SolveCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new SolveCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$captcha_guid = 'CAPTCHA-GUID';
		$captcha_solution = 'CAPTCHA-SOLUTION';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'captcha_guid' => $captcha_guid, 'captcha_solution' => $captcha_solution],
			[$session_id, $captcha_guid, $captcha_solution]
		);
	}
}
