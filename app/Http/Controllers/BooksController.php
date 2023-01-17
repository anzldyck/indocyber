<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BooksRequest;
use App\Models\Books;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Books::latest()->get();
        return view('books.index', [
            'data'  => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BooksRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/book', 'public');
        $data['created_by'] = Auth::user()->id;

        Books::create($data);
        return redirect()->route('books');
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
        $data = Books::findOrFail($id);
        return view('books.edit', [
            'data'  => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BooksRequest $request, $id)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/book', 'public');
        $data['updated_by'] = Auth::user()->id;

        $item = Books::findOrFail($id);
        $item->update($data);
        return redirect()->route('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Books::findOrFail($id);
        $data->update([
            'deleted_by' => Auth::user()->id
        ]);

        $data->delete();
        return redirect()->route('books');
    }
}
