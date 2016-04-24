<?php

namespace Larabb\Http\Controllers;

use Illuminate\Http\Request;

use Larabb\Http\Requests;

class TopicsController extends Controller
{
    public function create($topic)
    {
        return view('topics.create');
    }
    
    public function view($topic)
    {
        return view('topics.view', ['topic' => Topic::findTopic($topic)]);
    }
}
