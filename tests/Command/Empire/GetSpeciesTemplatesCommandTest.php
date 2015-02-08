<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Empire\GetSpeciesTemplatesCommand;


class GetSpeciesTemplatesCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new GetSpeciesTemplatesCommand(static::MODULE, static::METHOD, [], []);
	}
}
