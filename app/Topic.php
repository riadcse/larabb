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
use App\Reply;
use App\User;

class Topic extends Model
{
	/**
	 * Fillable fields
	 *
	 * @var array
	 */
	protected $fillable = ['board_id', 'title', 'body'];

	/**
	 * 
	 */
    public function replies()
    {
    	return $this->hasMany(Reply::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
