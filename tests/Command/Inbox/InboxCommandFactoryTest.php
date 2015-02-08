<?php

namespace LacunaPHP\APIClient\Tests\Command\Inbox;

use LacunaPHP\APIClient\Tests\Command\APICommandFactoryTest;
use LacunaPHP\APIClient\Command\Inbox\InboxCommandFactory;


class InboxCommandFactoryTest extends APICommandFactoryTest {

	public function setUp() {
		$this->factory = new InboxCommandFactory('test');
	}

	public function testGetArchiveMessagesCommand() {
		$this->verifyCommandClass(
			'archivemessages',
			'LacunaPHP\\APIClient\\Command\\Inbox\\ArchiveMessagesCommand'
		);
	}

	public function testGetReadMessageCommand() {
		$this->verifyCommandClass(
			'readmessage',
			'LacunaPHP\\APIClient\\Command\\Inbox\\ReadMessageCommand'
		);
	}

	public function testGetSendMessageCommand() {
		$this->verifyCommandClass(
			'sendmessage',
			'LacunaPHP\\APIClient\\Command\\Inbox\\SendMessageCommand'
		);
	}

	public function testGetTrashMessagesCommand() {
		$this->verifyCommandClass(
			'trashmessages',
			'LacunaPHP\\APIClient\\Command\\Inbox\\TrashMessagesCommand'
		);
	}

	public function testGetViewArchivedCommand() {
		$this->verifyCommandClass(
			'viewarchived',
			'LacunaPHP\\APIClient\\Command\\Inbox\\ViewArchivedCommand'
		);
	}

	public function testGetViewInboxCommand() {
		$this->verifyCommandClass(
			'viewinbox',
			'LacunaPHP\\APIClient\\Command\\Inbox\\ViewInboxCommand'
		);
	}

	public function testGetViewSentCommand() {
		$this->verifyCommandClass(
			'viewsent',
			'LacunaPHP\\APIClient\\Command\\Inbox\\ViewSentCommand'
		);
	}

	public function testGetViewTrashedCommand() {
		$this->verifyCommandClass(
			'viewtrashed',
			'LacunaPHP\\APIClient\\Command\\Inbox\\ViewTrashedCommand'
		);
	}
}
