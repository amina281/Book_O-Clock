<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('AuthFolder.admin');
    }

    public  function  getUserView()
    {
      return view('Admin.ManageUsers');
    }

    public function  getUsers(Request $request)
    {
        //print_r($request->all());
        $columns = array(
            0 => 'name',
            1 => 'email',
            2 => 'created_at',
            3 => 'action'
        );

        $totalData = User::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value'))){
            $posts = User::offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();

            $totalFiltered = User::count();
        }
        else
            {
            $search = $request->input('search.value');

            $posts = User::where('name', 'like', "%{$search}%")
                ->orWhere('email','like',"%{$search}%")
                ->orWhere('created_at','like',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();

            $totalFiltered = User::where('name', 'like', "%{$search}%")
                ->orWhere('email','like',"%{$search}%")
                ->count();
        }


        $data = array();

        if($posts){
            foreach($posts as $r){
              //  $delete =  route('posts.show',$r->id);
               // $edit =  route('posts.edit',$r->id);

                $nestedData['name'] = $r->name;
                $nestedData['email'] = $r->email;
                $nestedData['created_at'] = date('d-m-Y H:i:s',strtotime($r->created_at));
                $nestedData['action'] = '
					<a href="$edit" class="btn btn-warning btn-xs">Edit</a>
					<a href="$edit" class="btn btn-danger btn-xs">Delete</a>
				';
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"			=> intval($request->input('draw')),
            "recordsTotal"	=> intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"			=> $data
        );

        echo json_encode($json_data);

    }

    function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name   =>  $request->column_value
            );
            DB::table('tbl_sample')
                ->where('id', $request->id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }
    }

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
            DB::table('tbl_sample')
                ->where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }
}
