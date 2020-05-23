<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BookManagmentController extends Controller
{
    public function index(){
        $books = Book::paginate(10);
        $authors = Author::all();
        return view('Admin.ManageBooks',compact('books','authors'));
    }

    public function addBook(Request $request){
       // $this->validation($request);

        $books = new Book;
        $books->ISBN = $request->ISBN;
        $books->Title = $request->Title;
        $books->PageNum =($request->PageNum);
        $books->AuthorId =($request->AuthorId);
        $books->Price =($request->Price);

        $books->imagePath ='img/products/81DiRewS5WL';
        $books->Published =Carbon::now();
        $books->slug =$request->ISBN;

        $books->save();
        return response()->json($books);

    }

    public function editBook(request $request){

          $this->validation($request);
          $book= Book::where('ISBN', $request->ISBN)
            ->update([
                'PageNum' => $request->PageNum,
                'Title' =>  $request->Title,
                'Price' =>  $request->Price,
                'AuthorID' =>  $request->AuthorId

            ]);
        $books =Book::where('ISBN', $request->ISBN)->first();

        return response()->json($books);
    }

    public function deleteBook(request $request){

        $book=DB::table('books')->where(['ISBN'=> $request->ISBN])->delete();
        return response()->json();
    }

    public function  validation($request)
    {
        return $this->validate($request,[
            'Title' => 'required|string|max:255',
           // 'AuthorId' => 'required|exists:author',
            'Price' => 'required',
            'PageNum' => 'required',
        ]);
    }
}
