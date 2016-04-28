<?php

namespace Larabb\Http\Controllers;

use Illuminate\Http\Request;

use Larabb\Http\Requests;

use Larabb\Forum;
use Larabb\Topic;
use Larabb\Reply;

class ForumController extends Controller
{
    /**
     * Initialize the forum
     */
    public function __construct()
    {
        // something
    }

    /**
     * Show the forum index
     * 
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        return view('forum.index');
    }

    /**
     * Show the create thread view
     * 
     * @return \Illuminate\Http\Response 
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Show the requested thread or board
     * 
     * @param Forum $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        return view('forum.show', compact('forum'));
    }

    /**
     * Store a new resource
     * 
     * @param Request $request
     * @return \Illuminate\Http\Response 
     */
    public function store(Request $request)
    {
        (new Forum($request->all))->save();
        return redirect(); // redirect to board/topic
    }

    /**
     * Update a resource
     * 
     * @param Topic $thread
     * @return \Illuminate\Http\Response 
     */
    public function update(Topic $thread)
    {
        (new Topic($thread))->save();
        return redirect(); // redirect to board/topic
    }

    /**
     * Destroy the given resource
     * 
     * @param $id
     */
    public function destroy($id)
    {
        
    }
}
