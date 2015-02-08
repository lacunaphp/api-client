<?php

namespace LacunaPHP\APIClient\Command\Empire;

use LacunaPHP\APIClient\Command\APICommand;


class SendPasswordResetMessageCommand extends APICommand {

	protected function buildParams(array $args = []) {
		if(isset($args['params'])) {
			return [
				$args['params']
			];
		}

		if(isset($args['empire_id'])) {
			return [
				['empire_id' => $args['empire_id']]
			];
		}

		if(isset($args['empire_name'])) {
			return [
				['empire_name' => $args['empire_name']]
			];
		}

		if(isset($args['email'])) {
			return [
				['email' => $args['email']]
			];
		}

		return parent::buildParams($args);
	}
}
