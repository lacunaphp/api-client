<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Security;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Security\SecurityCommandFactory;


class SecurityCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new SecurityCommandFactory('test');
	}

	public function testGetViewPrisonersCommand() {
		$this->verifyCommandClass(
			'viewprisoners',
			'LacunaPHP\\APIClient\\Command\\Building\\Security\\ViewPrisonersCommand'
		);
	}

	public function testGetExecutePrisonerCommand() {
		$this->verifyCommandClass(
			'executeprisoner',
			'LacunaPHP\\APIClient\\Command\\Building\\Security\\ExecutePrisonerCommand'
		);
	}

	public function testGetReleasePrisonerCommand() {
		$this->verifyCommandClass(
			'releaseprisoner',
			'LacunaPHP\\APIClient\\Command\\Building\\Security\\ReleasePrisonerCommand'
		);
	}

	public function testGetViewForeignSpiesCommand() {
		$this->verifyCommandClass(
			'viewforeignspies',
			'LacunaPHP\\APIClient\\Command\\Building\\Security\\ViewForeignSpiesCommand'
		);
	}
}
