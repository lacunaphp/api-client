<?php

namespace LacunaPHP\APIClient\Tests\Command\Body;

use LacunaPHP\APIClient\Tests\Command\BodyCommandTest;
use LacunaPHP\APIClient\Command\Body\ViewLawsCommand;


class ViewLawsCommandTest extends BodyCommandTest {

	public function setUp() {
		$this->command = new ViewLawsCommand(static::MODULE, static::METHOD, [], []);
	}
}
