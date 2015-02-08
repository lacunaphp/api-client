<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Capitol;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Capitol\CapitolCommandFactory;


class CapitolCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new CapitolCommandFactory('test');
	}

	public function testGetRenameEmpireCommand() {
		$this->verifyCommandClass(
			'renameempire',
			'LacunaPHP\\APIClient\\Command\\Building\\Capitol\\RenameEmpireCommand'
		);
	}
}
