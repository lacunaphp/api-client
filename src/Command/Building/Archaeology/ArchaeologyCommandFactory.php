<?php

namespace LacunaPHP\APIClient\Command\Building\Archaeology;

use LacunaPHP\APIClient\Command\Building\BuildingCommandFactory;


class ArchaeologyCommandFactory extends BuildingCommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'searchforglyph':
				return new SearchForGlyphCommand($this->getName(), 'search_for_glyph', $args, $options);
			case 'subsidizesearch':
				return new SubsidizeSearchCommand($this->getName(), 'subsidize_search', $args, $options);
			case 'getglyphs': //deprecated, use get_glyph_summary instead
			case 'getglyphsummary':
				return new GetGlyphSummaryCommand($this->getName(), 'get_glyph_summary', $args, $options);
			case 'assembleglyphs':
				return new AssembleGlyphsCommand($this->getName(), 'assemble_glyphs', $args, $options);
			case 'getoresavailableforprocessing':
				return new GetOresAvailableForProcessingCommand($this->getName(), 'get_ores_available_for_processing', $args, $options);
			case 'viewexcavators':
				return new ViewExcavatorsCommand($this->getName(), 'view_excavators', $args, $options);
			case 'abandonexcavator':
				return new AbandonExcavatorCommand($this->getName(), 'abandon_excavator', $args, $options);
			case 'massabandonexcavator':
				return new MassAbandonExcavatorCommand($this->getName(), 'mass_abandon_excavator', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
