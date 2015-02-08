<?php

namespace LacunaPHP\APIClient\Tests\Command\Empire;

use LacunaPHP\APIClient\Tests\Command\APICommandTest;
use LacunaPHP\APIClient\Command\Empire\EditProfileCommand;


class EditProfileCommandTest extends APICommandTest {

	public function setUp() {
		$this->command = new EditProfileCommand(static::MODULE, static::METHOD, [], []);
	}

	public function testGetParams() {
		$session_id = 'SESSION-ID';

		$varnames = [
			'description',
			'email',
			'sitter_password',
			'status_message',
			'city',
			'country',
			'notes',
			'skype',
			'player_name',
			'public_medals',
			'skip_happiness_warnings',
			'skip_resource_warnings',
			'skip_pollution_warnings',
			'skip_medal_messages',
			'skip_facebook_wall_posts',
			'skip_found_nothing',
			'skip_excavator_resources',
			'skip_excavator_glyph',
			'skip_excavator_plan',
			'skip_spy_recovery',
			'skip_probe_detected',
			'skip_attack_messages',
			'skip_incoming_ships',
		];

		$profile = [];
		foreach($varnames as $varname) {
			$varvalue = strtoupper($varname) . '-VALUE';

			$profile[$varname] = $varvalue;

			$this->verifyCommandParams(
				['session_id' => $session_id, 'profile' => [$varname => $varvalue]],
				[$session_id, [$varname => $varvalue]]
			);

			$this->verifyCommandParams(
				['session_id' => $session_id, $varname => $varvalue],
				[$session_id, [$varname => $varvalue]]
			);
		}

		$this->verifyCommandParams(
			['session_id' => $session_id, 'profile' => $profile],
			[$session_id, $profile]
		);
	}
}
