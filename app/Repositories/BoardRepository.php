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
use App\Category;

class BoardRepository
{
	/**
	 * Return an object of all boards in a given category
	 *
	 * @return App\Board
	 */
	public function getBoards($category_id)
	{
		return Board::where('category_id', '=', $category_id);
	}
}