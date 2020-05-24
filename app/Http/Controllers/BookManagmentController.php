<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

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
        $books->Published =Carbon::now();
        $books->imagePath ='/img/products';
        $books->slug =$this->createSlug($request->Title);
        $books->save();
        return response()->json($books);

    }

    public function editBook(request $request){

         $valid= $this->validation($request);
  //      $imageFullPath= ' ';
//if($request->hasFile('imagePath')){
            $image = $request->file('imagePath');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/products/'), $new_name);
            $imageFullPath = 'img/products/' . $new_name;
//}
          $book= Book::where('ISBN', $request->ISBN)
            ->update([
                'PageNum' => $request->PageNum,
                'Title' =>  $request->Title,
                'Price' =>  $request->Price,
                'AuthorID' =>  $request->AuthorId,
                'imagePath'=> $imageFullPath,
                'slug'=>$this->createSlug($request->Title)
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
            'imagePath' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    }

    public function createSlug($title, $id = 0)
    {
        // Normalize the title
        $slug = str_slug($title);

        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);

        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }

        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }

        throw new \Exception('Can not create a unique slug');
    }

    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Book::select('slug')->where('slug', 'like', $slug.'%')
            ->where('ISBN', '<>', $id)
            ->get();
    }
}
