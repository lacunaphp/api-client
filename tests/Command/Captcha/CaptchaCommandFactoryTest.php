<?php

namespace LacunaPHP\APIClient\Tests\Command\Captcha;

use LacunaPHP\APIClient\Tests\Command\APICommandFactoryTest;
use LacunaPHP\APIClient\Command\Captcha\CaptchaCommandFactory;


class CaptchaCommandFactoryTest extends APICommandFactoryTest {

	public function setUp() {
		$this->factory = new CaptchaCommandFactory('test');
	}

	public function testGetFetchCommand() {
		$this->verifyCommandClass(
			'fetch',
			'LacunaPHP\\APIClient\\Command\\Captcha\\FetchCommand'
		);
	}

	public function testGetSolveCommand() {
		$this->verifyCommandClass(
			'solve',
			'LacunaPHP\\APIClient\\Command\\Captcha\\SolveCommand'
		);
	}
}
