<?php

namespace LacunaPHP\APIClient;

use LacunaPHP\APIClient\Client;


class Module {
	private $client;
	private $name;

	public function __construct(Client $client, $name) {
		$this->client = $client;
		$this->name = $name;
	}

	public function __call($name, $args) {
		return $this->client->__call($this->name . '.' . $name, $args);
	}
}
