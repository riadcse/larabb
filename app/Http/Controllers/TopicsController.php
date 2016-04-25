<?php

namespace Larabb\Http\Controllers;

use Larabb\Http\Requests;
use Larabb\Topic;

class TopicsController extends Controller
{
    public function create()
    {
        return view('topics.create');
    }
    
    public function view($topic)
    {
        return view('topics.view', ['topic' => $topic]);
    }
}
