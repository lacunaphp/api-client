<?php

namespace LacunaPHP\APIClient\Command;


interface APICommandFactoryInterface {

	public function getName();

	public function getCommand($name, array $args = [], array $options = []);
}
