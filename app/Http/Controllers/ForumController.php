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
	 *
	 */
	protected $categories;

	/**
	 *
	 */
	public function __construct(CategoryRepository $categories)
	{
		$this->categories = $categories;
	}

	/**
	 *
	 */
	public function index()
	{
		return view('forum.index', [
			'categories' => $this->categories->getCategories()
		]);
	}

}
