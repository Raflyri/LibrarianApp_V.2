<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Controllers\bookController;

class bookController extends Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Books::all();
        return view('book.view')->with(compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'book_id' => 'required',
            'book_title' => 'required',
            'author' => 'required',
            'book_dept' => 'required',
            'description' => 'required'
        ]);

        $book = new Books();
        $book->book_id = $request->book_id;
        $book->book_title = $request->book_title;
        $book->author = $request->author;
        $book->book_dept = $request->book_dept;
        $book->description = $request->description;
        $book->save();
        return redirect()->route('create.book')->with('message', 'New Book Added Successfully');
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
}
