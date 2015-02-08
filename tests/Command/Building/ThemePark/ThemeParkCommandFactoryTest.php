<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\ThemePark;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\ThemePark\ThemeParkCommandFactory;


class ThemeParkCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new ThemeParkCommandFactory('test');
	}

	public function testGetOperateCommand() {
		$this->verifyCommandClass(
			'operate',
			'LacunaPHP\\APIClient\\Command\\Building\\ThemePark\\OperateCommand'
		);
	}
}
