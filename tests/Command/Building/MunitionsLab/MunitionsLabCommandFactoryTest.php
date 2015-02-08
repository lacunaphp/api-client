<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\MunitionsLab;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\MunitionsLab\MunitionsLabCommandFactory;


class MunitionsLabCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new MunitionsLabCommandFactory('test');
	}
}
