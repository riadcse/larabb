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

use App\Board;
use App\Topic;
use App\Reply;
use App\User;

class TopicsController extends Controller
{
    protected $request;

    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->middleware('auth', ['except' => ['index', 'show']]);
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
        $board = Board::find($this->request->id);

        return view('topics.create', compact('board'));
    }

    /**
     * Store the new topic
     *
     * @return \Illuminate\Request
     */
    public function store()
    {
        $this->request->user()->topics()->create([
            'board_id' => $this->request->id,
            'title' => $this->request->title,
            'body' => $this->request->body
        ]);

        return redirect(url('/board/' . $this->request->id));
    }

    /**
     * Show the 'edit topic' view
     *
     * @param \Illuminate\Http\Request $id
     * @return \Illuminate\Request
     */
    public function edit($id)
    {
        $topic = Topic::find($id);

        return view('topics.update', compact('topic'));
    }

    /**
     * Update an existing topic
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Request
     */
    public function update($id)
    {
        $this->request->user()->topics()->update([
            'title' => $this->request->title,
            'body' => $this->request->body
        ]);

        return redirect(url('/topic/' . $id));
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
