<?php

namespace LacunaPHP\APIClient\Command\Building\SpacePort;

use LacunaPHP\APIClient\Command\APICommand;


class ViewAllShipsCommand extends APICommand {

	protected function buildParams(array $args = []) {
		$paging_options = [
			'page_number',
			'items_per_page',
			'no_paging'
		];

		$paging = [];
		if(is_array($args['paging'])) {
			$paging = $args['paging'];
		}

		foreach($paging_options as $option) {
			if(!isset($paging[$option]) && isset($args[$option])) {
				$paging[$option] = $args[$option];
			}
		}

		$filter_options = [
			'task',
			'type',
			'tag'
		];

		$filter = [];
		if(is_array($args['filter'])) {
			$filter = $args['filter'];
		}

		foreach($filter_options as $option) {
			if(!isset($filter[$option]) && isset($args[$option])) {
				$filter[$option] = $args[$option];
			}
		}

		if(isset($args['sort'])) {
			return [
				$args['session_id'],
				$args['building_id'],
				$paging,
				$filter,
				$args['sort']
			];
		}

		if($filter) {
			return [
				$args['session_id'],
				$args['building_id'],
				$paging,
				$filter
			];
		}

		if($paging) {
			return [
				$args['session_id'],
				$args['building_id'],
				$paging
			];
		}

		return [
			$args['session_id'],
			$args['building_id']
		];
	}
}
