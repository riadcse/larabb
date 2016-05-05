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
use App\Board;
use App\Topic;

class BoardsController extends Controller
{
	/**
	 *
	 */
    public function show($id)
    {
    	$board = Board::find($id);
    	$topics = Topic::where('board_id', '=', $id)->paginate(15);

    	return view('forum.show', compact(['board', 'topics']));
    }
}
