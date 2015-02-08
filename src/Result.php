<?php

namespace LacunaPHP\APIClient;

use GuzzleHttp\Collection;
use GuzzleHttp\Message\RequestInterface;
use GuzzleHttp\Message\ResponseInterface;


class Result extends Collection {

	public function __construct(RequestInterface $request, ResponseInterface $response) {
		$payload = $response->json();

		$this->id = $payload['id'];

		$result = $payload['result'];

		$this->status = [];
		if(isset($result['status'])) {
			$this->status = $result['status'];
			unset($result['status']);
		}

		parent::__construct($result);
	}

	public function getId() {
		return $this->id;
	}

	public function getStatus() {
		return $this->status;
	}
}
