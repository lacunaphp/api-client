<?php

namespace LacunaPHP\APIClient\Tests\Command\Alliance;

use LacunaPHP\APIClient\Tests\Command\APICommandFactoryTest;
use LacunaPHP\APIClient\Command\Alliance\AllianceCommandFactory;


class AllianceCommandFactoryTest extends APICommandFactoryTest {

	public function setUp() {
		$this->factory = new AllianceCommandFactory('test');
	}

	public function testGetFindCommand() {
		$this->verifyCommandClass(
			'find',
			'LacunaPHP\\APIClient\\Command\\Alliance\\FindCommand'
		);
	}

	public function testGetViewProfileCommand() {
		$this->verifyCommandClass(
			'viewprofile',
			'LacunaPHP\\APIClient\\Command\\Alliance\\ViewProfileCommand'
		);
	}
}
