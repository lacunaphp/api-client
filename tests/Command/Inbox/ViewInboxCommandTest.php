<?php

namespace LacunaPHP\APIClient\Tests\Command\Inbox;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Inbox\ViewInboxCommand;


class ViewInboxCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new ViewInboxCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$page_number = 2;
		$tags = ['foo', 'bar', 'baz'];

		$this->verifyCommandParams(
			['session_id' => $session_id],
			[$session_id]
		);

		$this->verifyCommandParams(
			['session_id' => $session_id, 'page_number' => $page_number],
			[$session_id, ['page_number' => $page_number]]
		);

		$this->verifyCommandParams(
			['session_id' => $session_id, 'tags' => $tags],
			[$session_id, ['tags' => $tags]]
		);

		$this->verifyCommandParams(
			['session_id' => $session_id, 'page_number' => $page_number, 'tags' => $tags],
			[$session_id, ['page_number' => $page_number, 'tags' => $tags]]
		);
		
		$this->verifyCommandParams(
			['session_id' => $session_id, 'options' => ['page_number' => $page_number]],
			[$session_id, ['page_number' => $page_number]]
		);

		$this->verifyCommandParams(
			['session_id' => $session_id, 'options' => ['tags' => $tags]],
			[$session_id, ['tags' => $tags]]
		);

		$this->verifyCommandParams(
			['session_id' => $session_id, 'options' => ['page_number' => $page_number, 'tags' => $tags]],
			[$session_id, ['page_number' => $page_number, 'tags' => $tags]]
		);
	}
}
