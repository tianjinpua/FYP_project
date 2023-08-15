<?php

namespace App\Http\Controllers;
use DB;
use App\Models\ScoreHa;
use Illuminate\Http\Request;

class ScoreHaController extends Controller
{
    public function viewGameTest(){
        return view('gameTest');
        }

    public function gameTestHa(){
        return view('gameTestHa');
        }

    public function index()
    {
       $scoreHa = ScoreHa::all();
       return view('gameTestHa')->with('score',$scoreHa); 
    }

    public function adminIndex()
    {
       $scoreHa = ScoreHa::all();
       return view('showHa')->with('scoreHa',$scoreHa); 
    }

    public function store(Request $request)
{ 
    $scoreHa = $request->input('score');

    ScoreHa::create(['score' => $scoreHa]);
    return redirect('gameTestHa')->with('flash_message', 'Post Added!');
}
}
