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

use App\Http\Requests;
use App\Repositories\CategoryRepository;

class ForumController extends Controller
{
	/**
	 * The database table name
	 *
	 * @var $categories
	 */
	protected $categories;

	/**
	 * Create the ForumController instance
	 *
	 * @return void
	 */
	public function __construct(CategoryRepository $categories)
	{
		$this->categories = $categories;
	}

	/**
	 * Show the main index page of the forum
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('forum.index', [
			'categories' => $this->categories->getCategories()
		]);
	}

}
