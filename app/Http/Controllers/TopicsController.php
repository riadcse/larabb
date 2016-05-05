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

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Topic;
use App\Reply;

class TopicsController extends Controller
{
    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * List all of the topics from a given board
     *
     * @return \Illuminate\Request
     */
    public function index()
    {
        $topics = Topic::all();
        
        return view('topics.index', compact('topics'));
    }
    
    /**
     * Show the 'create topic' view
     *
     * @return \Illuminate\Request
     */
    public function create(Request $request)
    {
        return view('topics.create');
    }

    /**
     * Show a given topic
     *
     * @return \Illuminate\Request
     */
    public function show($id)
    {
        $topic = Topic::find($id);

        return view('topics.show', compact('topic'));
    }

    /**
     * Store the new topic
     *
     * @return \Illuminate\Request
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'board_id' => 'required|integer',
            'title' => 'required|max:150',
            'body' => 'required|max:66000'
        ]);

        $request->user()->topics()->create([
            'board_id' => $request->board,
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect('/');
    }

    /**
     * Show the 'edit topic' view
     *
     * @return \Illuminate\Request
     */
    public function edit($id)
    {
        return view('topics.edit');
    }

    /**
     * Delete a topic
     *
     * @return \Illuminate\Redirect
     */
    public function delete($id)
    {
        return redirect('/');
    }
}
