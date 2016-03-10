<?php

namespace LacunaPHP\APIClient\Command\Empire;

use LacunaPHP\APIClient\Command\APICommand;


class DeauthorizeSittersCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$opts = [
			'empires'
		];

		$options = $args['options'] ?: [];
		foreach($opts as $opt) {
			if(isset($args[$opt])) {
				$options[$opt] = $args[$opt];
			}
		}

		return [
			$args['session_id'],
			$options
		];
	}
}
