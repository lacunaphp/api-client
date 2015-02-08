<?php

namespace LacunaPHP\APIClient\Tests\Command\Inbox;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Inbox\SendMessageCommand;


class SendMessageCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new SendMessageCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';
		$recipients = ['foo', 'bar', 'baz'];
		$subject = 'SUBJECT';
		$body = 'BODY';
		$in_reply_to = 'IN-REPLY-TO';
		$forward = 'FORWARD';

		$this->verifyCommandParams(
			[
				'session_id' => $session_id,
				'recipients' => $recipients,
				'subject' => $subject,
				'body' => $body
			],
			[$session_id, $recipients, $subject, $body]
		);

		$this->verifyCommandParams(
			[
				'session_id' => $session_id,
				'recipients' => $recipients,
				'subject' => $subject,
				'body' => $body,
				'in_reply_to' => $in_reply_to
			],
			[$session_id, $recipients, $subject, $body, ['in_reply_to' => $in_reply_to]]
		);

		$this->verifyCommandParams(
			[
				'session_id' => $session_id,
				'recipients' => $recipients,
				'subject' => $subject,
				'body' => $body,
				'forward' => $forward
			],
			[$session_id, $recipients, $subject, $body, ['forward' => $forward]]
		);

		$this->verifyCommandParams(
			[
				'session_id' => $session_id,
				'recipients' => $recipients,
				'subject' => $subject,
				'body' => $body,
				'in_reply_to' => $in_reply_to,
				'forward' => $forward
			],
			[$session_id, $recipients, $subject, $body, ['in_reply_to' => $in_reply_to, 'forward' => $forward]]
		);

		$this->verifyCommandParams(
			[
				'session_id' => $session_id,
				'recipients' => $recipients,
				'subject' => $subject,
				'body' => $body,
				'options' => [
					'in_reply_to' => $in_reply_to
				]
			],
			[$session_id, $recipients, $subject, $body, ['in_reply_to' => $in_reply_to]]
		);

		$this->verifyCommandParams(
			[
				'session_id' => $session_id,
				'recipients' => $recipients,
				'subject' => $subject,
				'body' => $body,
				'options' => [
					'forward' => $forward
				]
			],
			[$session_id, $recipients, $subject, $body, ['forward' => $forward]]
		);

		$this->verifyCommandParams(
			[
				'session_id' => $session_id,
				'recipients' => $recipients,
				'subject' => $subject,
				'body' => $body,
				'options' => [
					'in_reply_to' => $in_reply_to,
					'forward' => $forward
				]
			],
			[$session_id, $recipients, $subject, $body, ['in_reply_to' => $in_reply_to, 'forward' => $forward]]
		);
	}
}
