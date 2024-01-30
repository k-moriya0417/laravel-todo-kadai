<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function create(){
        return view('requests.create');
    }
    
    public function confirm(Request $request){
        $title = $request->input('title');
        $content = $request->input('content');

        $method = $request->method();

        $path = $request->path();

        $url = $request->url();

        $ip = $request->ip();

        $variables = [
            'title',
            'content',
            'method',
            'path',
            'url',
            'ip'
        ];
        return view('requests.confirm',compact($variables));
    }
}
