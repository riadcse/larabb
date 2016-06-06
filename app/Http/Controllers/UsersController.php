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

use Illuminate\Http\Request;

use App\Requests;
use App\User;

class UsersController extends Controller
{
	protected $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
		$this->middleware('auth', [
			'except' => ['show'],
		]);
	}

	/**
	 * Return the list of users
	 */
	public function index(User $user)
	{
		$users = $user->paginate(15);

		return view('user.list', [
			'users' => $users,
		]);
	}

	/**
	 * Return a single user's profile
	 */
    public function show($id, User $user)
    {
    	$find = $user->where('user_id', $id)->first();

    	if (!$find) {
    		return abort(404);
    	}

    	return view('user.show', [
    		'user' => $find,
    	]);
    }
}
