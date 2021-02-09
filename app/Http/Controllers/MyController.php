<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class MyController extends Controller
{
    public function index(){
    	$data = Content::all();
        return view('template/baseUser', ['contents' => $data]);  
    }

    public function explore(){
    	$data = Content::all();
        return view('contents', ['contents' => $data]);  
    }

    public function detail($id){
    	$data = Content::firstWhere('id', $id);
        return view('detail', ['content' => $data]);
    }

}
