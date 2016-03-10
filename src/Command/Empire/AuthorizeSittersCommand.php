<?php

namespace LacunaPHP\APIClient\Command\Empire;

use LacunaPHP\APIClient\Command\APICommand;


class AuthorizeSittersCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$opts = [
			'allied',
			'alliance',
			'alliance_id',
			'empires',
			'revalidate_all'
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
