<?php

namespace LacunaPHP\APIClient\Tests\Command\Map;

use LacunaPHP\APIClient\Tests\Command\APICommandFactoryTest;
use LacunaPHP\APIClient\Command\Map\MapCommandFactory;


class MapCommandFactoryTest extends APICommandFactoryTest {

	public function setUp() {
		$this->factory = new MapCommandFactory('test');
	}

	public function testGetCheckStarForIncomingProbeCommand() {
		$this->verifyCommandClass(
			'checkstarforincomingprobe',
			'LacunaPHP\\APIClient\\Command\\Map\\CheckStarForIncomingProbeCommand'
		);
	}

	public function testGetGetStarByNameCommand() {
		$this->verifyCommandClass(
			'getstarbyname',
			'LacunaPHP\\APIClient\\Command\\Map\\GetStarByNameCommand'
		);
	}

	public function testGetGetStarByXYCommand() {
		$this->verifyCommandClass(
			'getstarbyxy',
			'LacunaPHP\\APIClient\\Command\\Map\\GetStarByXYCommand'
		);
	}

	public function testGetGetStarCommand() {
		$this->verifyCommandClass(
			'getstar',
			'LacunaPHP\\APIClient\\Command\\Map\\GetStarCommand'
		);
	}

	public function testGetGetStarMapCommand() {
		$this->verifyCommandClass(
			'getstarmap',
			'LacunaPHP\\APIClient\\Command\\Map\\GetStarMapCommand'
		);
	}

	public function testGetGetStarsCommand() {
		$this->verifyCommandClass(
			'getstars',
			'LacunaPHP\\APIClient\\Command\\Map\\GetStarsCommand'
		);
	}

	public function testGetProbeSummaryFissuresCommand() {
		$this->verifyCommandClass(
			'probesummaryfissures',
			'LacunaPHP\\APIClient\\Command\\Map\\ProbeSummaryFissuresCommand'
		);
	}

	public function testGetSearchStarsCommand() {
		$this->verifyCommandClass(
			'searchstars',
			'LacunaPHP\\APIClient\\Command\\Map\\SearchStarsCommand'
		);
	}
}
