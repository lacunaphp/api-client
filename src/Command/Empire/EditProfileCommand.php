<?php

namespace LacunaPHP\APIClient\Command\Empire;

use LacunaPHP\APIClient\Command\APICommand;


class EditProfileCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$vars = [
			// text string
			'description',
			'email',
			'sitter_password',
			'status_message',
			'city',
			'country',
			'notes',
			'skype',
			'player_name',

			// array of ids
			'public_medals',

			// 0 (false) or 1 (true)
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

		$profile = $args['profile'] ?: [];
		foreach($vars as $var) {
			if(isset($args[$var])) {
				$profile[$var] = $args[$var];
			}
		}

		return [
			$args['session_id'],
			$profile
		];
	}
}
