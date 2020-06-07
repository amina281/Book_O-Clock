<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Validation\Validator;
use Validator;
use App\Http\Controllers\Controller;

class AuthorManagmentController extends Controller
{
    public function index(){
        $authors = Author::paginate(10);
        return view('Admin.ManageAuthors',compact('authors'));
    }

    public function addAuthor(Request $request){

            $validator = $this->validation($request);

            if ($validator->fails()) {

                $responseBag = $validator->getMessageBag()->toArray();
                $responseBag['type'] = ['error'];

                if ($request->ajax()) {
                    return response()->json($responseBag, 422);
                }
            $this->throwValidationException(
                $request, $validator
            );
        }

        if($request->imagePath == '0'){
            $imageFullPath= 'img/authors/';}
        else {

            $image = $request->file('imagePath');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/authors/'), $new_name);
            $imageFullPath = 'img/authors/' . $new_name;
            }

        $authors = new Author;
        $authors->Authorname = $request->Authorname;
        $authors->Address = $request->Address;
        $authors->BookNumber =0;
        $authors->description ='';
        $authors->imagePath =$imageFullPath;
        $authors->slug =$this->createSlug($request->Authorname);

        $authors->save();


        return response()->json($authors);

    }

    public function editAuthor(request $request){
        $validator = $this->validation($request);

            if ($validator->fails()) {

                $responseBag = $validator->getMessageBag()->toArray();
                $responseBag['type'] = ['error'];

                if ($request->ajax()) {
                    return response()->json($responseBag, 422);
                }

            $this->throwValidationException(
                $request, $validator
            );
        }

            if($request->imagePath == '0'){
            $imageFullPath= 'img/authors/';}

        $image = $request->file('imagePath');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/authors/'), $new_name);
        $imageFullPath = 'img/authors/' . $new_name;




        $author= Author::where('Id', $request->Id)
            ->update([
                'Authorname' => $request->Authorname,
                'Address' =>  $request->Address,
                'imagePath'=> $imageFullPath,
                'slug'=>$this->createSlug($request->Authorname,$request->Id)
            ]);

        $authors =Author::where('Id', $request->Id)->first();

        return response()->json($authors);
    }

    public function deleteAuthor(request $request){

        $authorbooks =DB::table('books')->where(['AuthorId'=> $request->Id])->count();

        if($authorbooks > 0){
           $authBooks =Book::where('AuthorId','=',$request->Id)->get();

           foreach ($authBooks as $authb)
           {
               DB::table('book_category_map')->where(['BookId'=> $authb->ISBN])->delete();
            }
            DB::table('books')->where(['AuthorId'=> $request->Id])->delete();
        }


        //Fshirja e Autorit
        $book=DB::table('author')->where(['Id'=> $request->Id])->delete();


        return response()->json();
    }

    protected function validation(Request $request)
    {
      return  Validator::make($request->all(), [
            'Authorname' => 'required|string|max:255',
            'Address' => 'required',
            'imagePath' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
             'BookNr'=>'required|integer',
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
        return Author::select('slug')->where('slug', 'like', $slug.'%')
            ->where('Id', '<>', $id)
            ->get();
    }
}
