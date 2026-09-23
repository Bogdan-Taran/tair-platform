<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use Illuminate\Http\Request;
use App\Http\Controllers\MainController;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function review(){
        $review = new FormModel();
        return view('review', ['reviews' => $review->all()]);
    }
    public function review_check(Request $request){
        $valid = $request->validate([
            'firstname' => 'required|min:4|max:100',
            'lastname' => 'required|min:4|max:100',
            'email' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500',
        ]);

        $review = new FormModel;
        $review->firstname = $request->input('firstname');
        $review->lastname = $request->input('lastname');
        $review->email = $request->input('email');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');

    }
}
