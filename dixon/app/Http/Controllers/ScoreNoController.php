<?php

namespace App\Http\Controllers;
use DB;
use App\Models\ScoreNo;
use Illuminate\Http\Request;

class ScoreNoController extends Controller
{
    public function viewGameTest(){
        return view('gameTest');
        }

    public function gameTestNo(){
        return view('gameTestNo');
        }

    public function index()
    {
       $scoreNo = ScoreNo::all();
       return view('gameTestNo')->with('score',$scoreNo); 
    }

    public function adminIndex()
    {
       $scoreNo = ScoreNo::all();
       return view('showNo')->with('scoreNo',$scoreNo); 
    }

    public function store(Request $request)
{ 
    $scoreNo = $request->input('score');

    ScoreNo::create(['score' => $scoreNo]);
    return redirect('gameTestNo')->with('flash_message', 'Post Added!');
}
}
