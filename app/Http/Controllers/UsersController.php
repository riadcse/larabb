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

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\User;

class UsersController extends Controller
{
	protected $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
		$this->middleware('auth', ['except' => ['show']]);
	}

	/**
	 *
	 */
    public function show($id)
    {
    	$user = User::find($id);

    	return view('profile.show');
    }
}
