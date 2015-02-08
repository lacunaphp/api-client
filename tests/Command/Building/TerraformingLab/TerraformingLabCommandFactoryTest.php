<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\TerraformingLab;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\TerraformingLab\TerraformingLabCommandFactory;


class TerraformingLabCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new TerraformingLabCommandFactory('test');
	}
}
