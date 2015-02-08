<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\PyramidJunkSculpture;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\PyramidJunkSculpture\PyramidJunkSculptureCommandFactory;


class PyramidJunkSculptureCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new PyramidJunkSculptureCommandFactory('test');
	}
}
