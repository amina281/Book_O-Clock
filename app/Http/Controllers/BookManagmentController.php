<?php

namespace App\Http\Controllers;

use App\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BookManagmentController extends Controller
{
    public function index(){
        $books = Book::paginate(10);
        return view('Admin.ManageBooks',compact('books'));
    }

    public function addBook(Request $request){
       // $this->validation($request);

        $book = new Book;
        $book->ISBN = $request->ISBN;
        $book->Title = $request->Title;
        $book->PageNum =($request->PageNum);
        $book->AuthorId =($request->AuthorId);
        $book->Price =($request->Price);

        $book->save();
        return response()->json($book);

    }

    public function editUser(request $request){
        $user = User::find ($request->id);

        //  $this->validation($request);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password= Hash::make($request->password);
        // $post->verified = $request->verified;
        $user->save();
        return response()->json($user);
    }

    public function deleteBook(request $request){

        $book=DB::table('books')->where(['ISBN'=> $request->ISBN])->delete();
        return response()->json();
    }

    public function  validation($request)
    {
        return $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }
}
