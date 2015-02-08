<?php

namespace LacunaPHP\APIClient\Command\Captcha;

use LacunaPHP\APIClient\Command\APICommandFactory;


class CaptchaCommandFactory extends APICommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'fetch':
				return new FetchCommand($this->getName(), 'fetch', $args, $options);
			case 'solve':
				return new SolveCommand($this->getName(), 'solve', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
