<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rows = DB::table('submissions')->select('*','submissions.id as submission_id')
                    ->join('countries', 'submissions.country', '=', 'countries.id')
                    ->join('person_titles', 'submissions.title', '=', 'person_titles.id')
                    ->join('languages', 'submissions.language', '=', 'languages.id')->get();

        return view('admin.home', ['rows'=>$rows]);
    }
}
