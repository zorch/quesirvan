<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users\User;
use App\Models\Officials\Official;
use App\Models\Comments\Comment;
use App\Models\Citizens\CitizenSearch;
use App\Models\Ratings\Rating;

use Auth;

use Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $officials_count = Official::all()->count();
        $searches_count = CitizenSearch::all()->count();
        $comments_count = Comment::all()->count();
        $ratings_count = Rating::all()->count();

        return view('dashboard.dashboard', ['officials_count'=> $officials_count, 'searches_count'=> $searches_count, 'comments_count'=>$comments_count, 'ratings_count'=>$ratings_count]);
    }

    public function index()
    {
        return view('dashboard.index');

    }
}
