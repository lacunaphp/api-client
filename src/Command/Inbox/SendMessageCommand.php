<?php

namespace LacunaPHP\APIClient\Command\Inbox;

use LacunaPHP\APIClient\Command\APICommand;


class SendMessageCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$optnames = [
			'in_reply_to',
			'forward'
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
				$args['recipients'],
				$args['subject'],
				$args['body'],
				$options
			];
		}

		return [
			$args['session_id'],
			$args['recipients'],
			$args['subject'],
			$args['body']
		];
	}
}
