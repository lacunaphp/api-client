<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Chip;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Chip\ChipCommandFactory;


class ChipCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new ChipCommandFactory('test');
	}
}
