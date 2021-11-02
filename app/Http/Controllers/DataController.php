<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index()
    {
        $data=\App\Data::all();
        return view('data.index',['data'=> $data]);
    }

    public function create()
    {
        return view('data.create');
    }

    public function insert(Request $request)
    {
        DB::table('data')->insert([
		    'name' => $request->name
	    ]);

        $data=\App\Data::all();
        return view('data.index',['data'=> $data]);
    }
    
    public function edit($id)
    {
        $data_edit = DB::table('data')->where('id',$id)->get();
        
        return view('data.edit',['data' => $data_edit]);
    
    }

    public function update(Request $request)
    {
        DB::table('data')->where('id',$request->id)->update([
            'name' => $request->name
        ]);
        
        $data=\App\Data::all();
        return view('data.index',['data'=> $data]);
    }

    public function hapus($id)
    {
        DB::table('data')->where('id',$id)->delete();
        
        $data=\App\Data::all();
        return view('data.index',['data'=> $data]);
    }
}
