<?php

namespace Larabb\Http\Controllers;

use Larabb\Http\Requests;
use Larabb\Topic;
use Larabb\Reply;

class TopicsController extends Controller
{
    public function create()
    {
        return view('topics.create');
    }
    
    public function view(Topic $topic)
    {
        return view('topics.view', ['topic' => $topic]);
    }
}
