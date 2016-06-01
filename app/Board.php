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

use App\Topic;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
	/**
	 *
	 */
    public function topics()
    {
    	return $this->hasMany(Topic::class);
    }

    /**
     *
     */
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
