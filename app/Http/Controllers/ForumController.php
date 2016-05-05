<?php
/**
 * This file is part of LaraBB.
 *
 * (c) Jason Clemons <hello@jasonclemons.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * that was distributed with this source code.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Board;
use App\Category;

class ForumController extends Controller
{
	/**
	 *
	 */
	public function index()
	{
		$categories = $this->getCategories();

		// Loop through each category and get its boards
		foreach ($categories as $category) {
			$category->boards = $this->getBoards($category->id);
		}

		return view('forum.index', compact('categories'));	
	}

	/**
	 * Return an object of all boards, or boards from a given category
	 *
	 * @param int $category_id
	 * @return App\Board
	 */
	public function getBoards($category_id = null)
	{
		return Board::where('category_id', '=', $category_id)->get();
	}

	/**
	 * Return an object of all categories
	 *
	 * @return App\Category
	 */
	public function getCategories()
	{
		return Category::all();
	}

}
