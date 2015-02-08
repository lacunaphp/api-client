<?php

namespace LacunaPHP\APIClient\Command\Inbox;

use LacunaPHP\APIClient\Command\APICommandFactory;


class InboxCommandFactory extends APICommandFactory {

	public function getCommand($name, array $args = [], array $options = []) {
		switch($name) {
			case 'viewinbox':
				return new ViewInboxCommand($this->getName(), 'view_inbox', $args, $options);
			case 'viewarchived':
				return new ViewArchivedCommand($this->getName(), 'view_archived', $args, $options);
			case 'viewtrashed':
				return new ViewTrashedCommand($this->getName(), 'view_trashed', $args, $options);
			case 'viewsent':
				return new ViewSentCommand($this->getName(), 'view_sent', $args, $options);
			case 'readmessage':
				return new ReadMessageCommand($this->getName(), 'read_message', $args, $options);
			case 'archivemessages':
				return new ArchiveMessagesCommand($this->getName(), 'archive_messages', $args, $options);
			case 'trashmessages':
				return new TrashMessagesCommand($this->getName(), 'trash_messages', $args, $options);
			case 'sendmessage':
				return new SendMessageCommand($this->getName(), 'send_message', $args, $options);
		}

		return parent::getCommand($name, $args, $options);
	}
}
