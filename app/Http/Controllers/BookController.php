<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

        Mail::to('boboyus@zoho.com')->send(new Welcome());
        return view('welcome', [
            'books' => Book::paginate(5)
        ]);
    }

    public function view()
    {
        $userId = Auth::id();
        // dd($userId);

        $books = Book::where('user_id',$userId)->paginate(1);
        //   dd($books);
        return view('user.book', [
            'books' => $books
        ]);


    }


}
