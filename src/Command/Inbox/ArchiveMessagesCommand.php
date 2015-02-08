<?php

namespace LacunaPHP\APIClient\Command\Inbox;

use LacunaPHP\APIClient\Command\APICommand;


class ArchiveMessagesCommand extends APICommand {

	protected function buildParams(array $args = []) {
		return [
			$args['session_id'],
			$args['message_ids']
		];
	}
}
