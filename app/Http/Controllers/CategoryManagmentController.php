<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryManagmentController extends Controller
{
    public function index(){
        $categories = Category::paginate(10);
        return view('Admin.ManageCategories',compact('categories'));
    }

    public function addCategory(Request $request){
        $this->validation($request);

       $categories = new Category();
       $categories->Name = $request->Name;
        $categories->Description = $request->Description;

        $categories->save();

        return response()->json($categories);

    }

    public function editCategory(request $request){
        $this->validation($request);

        $category= Category::where('Id', $request->Id)
            ->update([
                'Name' => $request->Name,
                'Description' =>  $request->Description

            ]);

        $categories =Category::where('Id', $request->Id)->first();

        return response()->json($categories);
    }

    public function deleteCategory(request $request){
        //Fshirja tek tabela book category map
        DB::table('book_category_map')->where(['CategoryId'=> $request->Id])->delete();
        //Fshirja e kategorise
        $category=DB::table('category')->where(['Id'=> $request->Id])->delete();
        return response()->json();
    }

    public function  validation($request)
    {
        return $this->validate($request,[
            'Name' => 'required|string|max:255',
            'Description' => 'required',

        ]);
    }


}
