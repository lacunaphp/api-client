<?php

namespace LacunaPHP\APIClient\Tests\Command\Building\Archaeology;

use LacunaPHP\APIClient\Tests\Command\Building\BuildingCommandFactoryTest;
use LacunaPHP\APIClient\Command\Building\Archaeology\ArchaeologyCommandFactory;


class ArchaeologyCommandFactoryTest extends BuildingCommandFactoryTest {

	public function setUp() {
		$this->factory = new ArchaeologyCommandFactory('test');
	}

	public function testGetSearchForGlyphCommand() {
		$this->verifyCommandClass(
			'searchforglyph',
			'LacunaPHP\\APIClient\\Command\\Building\\Archaeology\\SearchForGlyphCommand'
		);
	}

	public function testGetSubsidizeSearchCommand() {
		$this->verifyCommandClass(
			'subsidizesearch',
			'LacunaPHP\\APIClient\\Command\\Building\\Archaeology\\SubsidizeSearchCommand'
		);
	}

	public function testGetGetGlyphSummaryCommand() {
		$this->verifyCommandClass(
			'getglyphsummary',
			'LacunaPHP\\APIClient\\Command\\Building\\Archaeology\\GetGlyphSummaryCommand'
		);
	}

	public function testGetAssembleGlyphsCommand() {
		$this->verifyCommandClass(
			'assembleglyphs',
			'LacunaPHP\\APIClient\\Command\\Building\\Archaeology\\AssembleGlyphsCommand'
		);
	}

	public function testGetGetOresAvailableForProcessingCommand() {
		$this->verifyCommandClass(
			'getoresavailableforprocessing',
			'LacunaPHP\\APIClient\\Command\\Building\\Archaeology\\GetOresAvailableForProcessingCommand'
		);
	}

	public function testGetViewExcavatorsCommand() {
		$this->verifyCommandClass(
			'viewexcavators',
			'LacunaPHP\\APIClient\\Command\\Building\\Archaeology\\ViewExcavatorsCommand'
		);
	}

	public function testGetAbandonExcavatorCommand() {
		$this->verifyCommandClass(
			'abandonexcavator',
			'LacunaPHP\\APIClient\\Command\\Building\\Archaeology\\AbandonExcavatorCommand'
		);
	}

	public function testGetMassAbandonExcavatorCommand() {
		$this->verifyCommandClass(
			'massabandonexcavator',
			'LacunaPHP\\APIClient\\Command\\Building\\Archaeology\\MassAbandonExcavatorCommand'
		);
	}
}
