<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Empire\RedeemEssentiaCodeCommand;


class RedeemEssentiaCodeCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new RedeemEssentiaCodeCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$code = 'CODE';

		$this->verifyCommandParams(
			['session_id' => $session_id, 'code' => $code],
			[$session_id, $code]
		);
	}
}
