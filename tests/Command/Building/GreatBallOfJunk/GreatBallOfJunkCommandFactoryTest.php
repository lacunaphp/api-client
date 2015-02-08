<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\GreatBallOfJunk;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\GreatBallOfJunk\GreatBallOfJunkCommandFactory;


class GreatBallOfJunkCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new GreatBallOfJunkCommandFactory('test');
	}
}
