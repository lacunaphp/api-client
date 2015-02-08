<?php

namespace LacunaPHP\APIClient\Command;

use GuzzleHttp\Command\CommandInterface as CommandInterface;


interface APICommandInterface extends CommandInterface {
	public function getModule();

	public function getMethod();

	public function getParams();

	public function getID();
}
