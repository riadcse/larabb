<?php
/**
 * This file is part of LaraBB.
 *
 * (c) Jason Clemons <hello@jasonclemons.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * that was distributed with this source code.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
	/**
	 *
	 */
    public function topics()
    {
    	return $this->hasMany('App\Topic');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
