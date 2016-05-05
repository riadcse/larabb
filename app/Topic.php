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

class Topic extends Model
{
	/**
	 * Fillable fields
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'body'];

	/**
	 * 
	 */
    public function replies()
    {
    	return $this->hasMany(Reply::class);
    }

    public function user()
    {
    	$this->belongsTo('App\User');
    }

    public function createTopic(Topic $topic, $user)
    {
    	$topic->user_id = $user;
    	
    	return $this->topics()->save($topic);
    }
}
