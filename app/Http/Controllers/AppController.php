<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;

class AppController extends Controller
{
    public function home(){
        return view('index',[
            'type' => 'Book List',
            'title' => 'Book List',
            'books' => Book::All(),
            'categories' => Category::All(),
        ]);
    }

    public function detail(Book $book){
        return view('index', [
            'type' => 'Book Detail',
            'title' => 'Book Detail',
            'book' => $book,
            'categories' => Category::All(),
        ]);
    }

    public function category(Category $category){
        return view('index',[
            'type' => "Book List",
            'title' => $category->name,
            'books' => $category->books,
            'categories' => Category::All(),
        ]);
    }

    public function contact(){
        return view('index',[
            'type' => "Contact",
            'categories' => Category::All(),
        ]);
    }

    public function publisher(){
        return view('index',[
            'type' => 'Publisher List',
            'title' => 'Publisher List',
            'publishers' => Publisher::All(),
            'categories' => Category::All(),
        ]);
    }

    public function publisherDetail(Publisher $publisher){
        return view('index', [
            'type' => 'Publisher Detail',
            'publisher' => $publisher,
            'add' => explode(', ', $publisher->address),
            'books' => $publisher->books,
            'categories' => Category::All(),
        ]);
    }
}
