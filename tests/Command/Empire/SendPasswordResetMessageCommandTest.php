<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Empire\SendPasswordResetMessageCommand;


class SendPasswordResetMessageCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new SendPasswordResetMessageCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$empire_id = 'EMPIRE-ID';
		$empire_name = 'EMPIRE-NAME';
		$email = 'EMAIL';

		$this->verifyCommandParams(
			['empire_id' => $empire_id],
			[['empire_id' => $empire_id]]
		);

		$this->verifyCommandParams(
			['empire_id' => $empire_id, 'empire_name' => $empire_name],
			[['empire_id' => $empire_id]]
		);

		$this->verifyCommandParams(
			['empire_id' => $empire_id, 'empire_name' => $empire_name, 'email' => $email],
			[['empire_id' => $empire_id]]
		);

		$this->verifyCommandParams(
			['empire_name' => $empire_name],
			[['empire_name' => $empire_name]]
		);

		$this->verifyCommandParams(
			['empire_name' => $empire_name, 'email' => $email],
			[['empire_name' => $empire_name]]
		);

		$this->verifyCommandParams(
			['email' => $email],
			[['email' => $email]]
		);
	}
}
