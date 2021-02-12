<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $title = 'Welcome to Laravel';
        // return view('pages.index', compact('title')); this or
        return view('pages.index')->with('title', $title); // this, which is better when passing multiple variables.
    }
    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO' ]
        );
        return view('pages.services')->with($data);
    }
}
