<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Validation\Validator;
use Validator;
use App\Http\Controllers\Controller;


class CategoryManagmentController extends Controller
{
    public function index(){
        $categories = Category::paginate(10);
        return view('Admin.ManageCategories',compact('categories'));
    }

    public function addCategory(Request $request){
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


        $categories = new Category();
       $categories->Name = $request->Name;
        $categories->Description = $request->Description;

        $categories->save();

        return response()->json($categories);

    }

    public function editCategory(request $request){
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
        return  Validator::make($request->all(), [
            'Name' => 'required|string|max:255',
            'Description' => 'required',

        ]);
    }


}
