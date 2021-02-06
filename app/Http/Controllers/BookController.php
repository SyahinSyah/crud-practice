<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // public function index()
    // {
    //     $book = Book::get();
    //     return view('welcome', [
    //         'books' => $book
    //     ]);
    // }

    public function index()
    {
        return view('welcome', [
            'books' => Book::paginate(5)
        ]);
    }



}
