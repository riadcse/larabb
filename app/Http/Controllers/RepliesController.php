<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RepliesController extends Controller
{
    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('auth');
    }

    /**
     *
     */
    public function create()
    {
    	return view('replies.create');
    }

    /**
     *
     */
    public function store(Request $request)
    {
    	
    }
}
