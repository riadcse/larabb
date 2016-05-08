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

use App\Category;

class CategoryRepository
{
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