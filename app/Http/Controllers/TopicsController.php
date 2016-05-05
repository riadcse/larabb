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
use App\Topic;
use App\Reply;

class TopicsController extends Controller
{
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

    public function store(Request $request)
    {
        
    }

    /**
     * Show the 'edit topic' view
     *
     * @return \Illuminate\Request
     */
    public function edit($id)
    {
        return view('topics.edit', compact('topic'));
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
