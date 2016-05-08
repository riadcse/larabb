<?php
/**
 * This file is part of LaraBB.
 *
 * (c) Jason Clemons <hello@jasonclemons.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * that was distributed with this source code.
 */

namespace App\Repositories;

use App\Board;
use App\Topic;

class TopicRepository
{
	/**
	 * Return an object of all topics in a given board
	 *
	 * @return App\Topic
	 */
	public function getTopics($board_id)
	{
		return Topic::where('board_id', '=', $board_id);
	}
}