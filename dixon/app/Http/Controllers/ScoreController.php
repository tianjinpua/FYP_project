<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function viewGameTest(){
        return view('gameTest');
        }
    
    public function gameTestEz(){
        return view('gameTestEz');
        }

    public function gameTestNo(){
        return view('gameTestNo');
        }

    public function gameTestHa(){
        return view('gameTestHa');
        }

    public function index()
    {
       $score = Score::all();
       return view('gameTestEz')->with('score',$score); 
    }

    public function adminIndex()
    {
       $score = Score::all();
       return view('showEz')->with('score',$score); 
    }

    public function store(Request $request)
{ 
    $score = $request->input('score');

    Score::create(['score' => $score]);
    return redirect('gameTestEz')->with('flash_message', 'Post Added!');
}
}
