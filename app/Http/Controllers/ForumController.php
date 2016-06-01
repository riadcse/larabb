<?php
/**
 * This file is part of LaraBB.
 *
 * (c) Jason Clemons <jason@larabb.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * that was distributed with this source code.
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Category;

class ForumController extends Controller
{
	/**
	 * Show the main index page of the forum
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$categories = Category::all();

		return view('forum.index', compact('categories'));
	}

}
