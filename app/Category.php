<?php
/**
 * This file is part of LaraBB.
 *
 * (c) Jason Clemons <jason@larabb.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * that was distributed with this source code.
 */

namespace App;

use App\Board;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	/**
	 *
	 */
	protected $table = 'categories';
	
	/**
	 *
	 */
    public function boards()
    {
    	return $this->hasMany(Board::class);
    }
}
