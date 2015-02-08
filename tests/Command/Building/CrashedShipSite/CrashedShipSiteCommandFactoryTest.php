<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\CrashedShipSite;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\CrashedShipSite\CrashedShipSiteCommandFactory;


class CrashedShipSiteCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new CrashedShipSiteCommandFactory('test');
	}
}
