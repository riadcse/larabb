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
use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
	/**
	 * Table associated with our replies
	 *
	 * @var string
	 */
	protected $table = 'replies';

	/**
	 * Fillable fields
	 *
	 * @var array
	 */
	protected $fillable = ['body'];

	/**
	 *
	 */
	public function topic()
	{
		return $this->belongsTo(Topic::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
