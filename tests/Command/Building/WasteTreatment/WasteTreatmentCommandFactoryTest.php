<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\WasteTreatment;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\WasteTreatment\WasteTreatmentCommandFactory;


class WasteTreatmentCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new WasteTreatmentCommandFactory('test');
	}
}
