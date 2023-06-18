<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function indexFront()
    {
        $books = Book::all();
        return view("books", ["books"=>$books]);
    }


    public function index()
    {
        $books = Book::all();
        return view('admin.books-index', ["books"=>$books]);
    }
    public function create()
    {
        return view("admin.books-create");
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name'=>'required',
            'link'=>'required',
            'thumbnail'=>'required'
        ]);

        $thumbnail = $request->thumbnail;
        $newPhotoPath = time().$thumbnail->getClientOriginalName();
        $thumbnail->move(public_path('/uploads/books'), $newPhotoPath);

        $attributes['thumbnail'] = '/uploads/books/'.$newPhotoPath;

        Book::create($attributes);
        return redirect('/admin/book')->with('success', 'Item Added Successfully');
    }
    public function edit(Book $book)
    {
        return view("admin.books-edit", ["book"=>$book]);
    }

    public function update(Request $request, Book $book)
    {
        $attributes = request()->all();
        if ($request->has('thumbnail')){
            $thumbnail = $request->thumbnail;
            $newPhotoPath = time().$thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('uploads/books'), $newPhotoPath);
            $attributes['thumbnail'] = 'uploads/books/'.$newPhotoPath;
        }
        $book->update($attributes);
        return redirect('/admin/book');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->forceDelete();
        return redirect("/admin/book");
    }
}
