<?php

namespace LacunaPHP\APIClient\Tests\Command\Body;

use LacunaPHP\APIClient\Tests\Command\APICommandFactoryTest;
use LacunaPHP\APIClient\Command\Body\BodyCommandFactory;


class BodyCommandFactoryTest extends APICommandFactoryTest {

	public function setUp() {
		$this->factory = new BodyCommandFactory('test');
	}

	public function testGetAbandonCommand() {
		$this->verifyCommandClass(
			'abandon',
			'LacunaPHP\\APIClient\\Command\\Body\\AbandonCommand'
		);
	}

	public function testGetGetBuildableCommand() {
		$this->verifyCommandClass(
			'getbuildable',
			'LacunaPHP\\APIClient\\Command\\Body\\GetBuildableCommand'
		);
	}

	public function testGetGetBuildingsCommand() {
		$this->verifyCommandClass(
			'getbuildings',
			'LacunaPHP\\APIClient\\Command\\Body\\GetBuildingsCommand'
		);
	}

	public function testGetGetStatusCommand() {
		$this->verifyCommandClass(
			'getstatus',
			'LacunaPHP\\APIClient\\Command\\Body\\GetStatusCommand'
		);
	}

	public function testGetRearrangeBuildingsCommand() {
		$this->verifyCommandClass(
			'rearrangebuildings',
			'LacunaPHP\\APIClient\\Command\\Body\\RearrangeBuildingsCommand'
		);
	}

	public function testGetRenameCommand() {
		$this->verifyCommandClass(
			'rename',
			'LacunaPHP\\APIClient\\Command\\Body\\RenameCommand'
		);
	}

	public function testGetRepairListCommand() {
		$this->verifyCommandClass(
			'repairlist',
			'LacunaPHP\\APIClient\\Command\\Body\\RepairListCommand'
		);
	}

	public function testGetViewLawsCommand() {
		$this->verifyCommandClass(
			'viewlaws',
			'LacunaPHP\\APIClient\\Command\\Body\\ViewLawsCommand'
		);
	}
}
