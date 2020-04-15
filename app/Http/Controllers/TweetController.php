<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'body' => 'required|max:255',
        ]);

        Auth::user()->tweets()->create($attributes);

        return redirect()->route('home');
    }
}
