<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class FrontIndexController extends Controller
{

    public function index()
    {
        $reviews = Review::where('is_publish',1)->with('user')->get();

       // dd($reviews[0]->user->name);
        return view('front.index', [
            'reviews' => $reviews
        ]);
    }
}
