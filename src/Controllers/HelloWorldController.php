<?php

namespace Ohom\HelloWorld\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = 'Hello World';
        return view('HelloWorld::welcome', compact('message'));
    }

}
