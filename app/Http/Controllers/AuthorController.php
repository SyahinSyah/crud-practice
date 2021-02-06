<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(Author $author)
    {
        $authorId = $author->id;
        $books = Author::find($authorId)->book;
    
        $params = [
            'author' => $author,
            'books' => $books,
            ];

        return view('author')->with($params);




        // $authorId = $author->id;
        // $authorId = Author::where('author_id' , $authorId)->book->get();

        // $author = Author::find($authorId)->book;
        // dd($author);


        // return view('author', [
        //     'Author' => $author
        // ]);
    }
}
