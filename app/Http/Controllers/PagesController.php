<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /*
    |--------------------------------------------------------------------------
    | Pass multiple Variable and arrays to view 
    |--------------------------------------------------------------------------
    |
    | This action pass the arrays and variable to view using compact and with
    | function I am rendering mix type of variable in this section
    | This action also print a table of mentioned varable.
    | This page is accessible using the url: localhost/project_directory/about
    |
    */
    public function about()
    {
        //$name = 'Furqan';
        //return view('pages.about')->with('name',$name);
       // return view('pages.about',compact('name'));
        $users = [];
        $users['first'] = 'Furqan Khan';
        $users['second'] =   'Burhan Khan';
        $users['third']  = 'Imran Khan';
        $subjects = ['English','Mathematics','Computer Science'];
        //return view('pages.about',$users)->with(['designation'=>'Software Engineer','year'=>'2015']); // using array directly in view action
        return view('pages.about',compact('users','subjects'))->with(['designation'=>'Software Engineer','year'=>'2015']);
        //return 'About page';
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function display()
    {
        return 'The age is greate than 200';
    }
}