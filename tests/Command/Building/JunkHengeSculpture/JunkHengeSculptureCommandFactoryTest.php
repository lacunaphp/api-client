<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\JunkHengeSculpture;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\JunkHengeSculpture\JunkHengeSculptureCommandFactory;


class JunkHengeSculptureCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new JunkHengeSculptureCommandFactory('test');
	}
}
