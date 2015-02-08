<?php

namespace LacunaPHP\APIClient\Command\Inbox;

use LacunaPHP\APIClient\Command\APICommand;


class ViewInboxCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$optnames = [
			// integer
			'page_number',

			// array
			'tags'
		];

		$options = $args['options'] ?: [];
		foreach($optnames as $optname) {
			if(!isset($options[$optname]) && isset($args[$optname])) {
				$options[$optname] = $args[$optname];
			}
		}

		if($options) {
			return [
				$args['session_id'],
				$options
			];
		}

		return [
			$args['session_id']
		];
	}
}
