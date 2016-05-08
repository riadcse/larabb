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
use App\User;

class TopicsController extends Controller
{
    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->request = $request;
    }

    /**
     * List all of the topics from a given board
     *
     * @return \Illuminate\Request
     */
    public function index()
    {
        $topics = Topic::with('topic_id', 'user_id');
        
        return view('topics.index', compact('topics'));
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
     * Show the 'create topic' view
     *
     * @return \Illuminate\Request
     */
    public function create()
    {
        return view('topics.create');
    }

    /**
     * Store the new topic
     *
     * @return \Illuminate\Request
     */
    public function store()
    {
        $this->validate($request, [
            'board_id' => 'required|integer',
            'title' => 'required|max:150',
            'body' => 'required|max:66000'
        ]);

        $request->user()->topics()->create([
            'board_id' => $request->board_id,
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect(url('/topic/' . $request->id));
    }

    /**
     * Show the 'edit topic' view
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Request
     */
    public function edit(Topic $topic)
    {
        return view('topics.edit');
    }

    /**
     * Update an existing topic
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Request
     */
    public function update(Request $request)
    {
        return redirect(url('/topic/' . $request->id));
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
