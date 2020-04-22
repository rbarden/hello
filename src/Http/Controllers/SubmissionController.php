<?php

namespace Rbarden\Hello\Http\Controllers;

use Rbarden\Hello\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SubmissionController extends Controller
{

    /**
     * Instantiate a new controller instance
     *
     * @return void
     */
     public function __construct()
     {
        $this->middleware(config('hello.private_middleware'))->only('index', 'destroy');
        $this->middleware(config('hello.public_middleware'))->only('create', 'store');
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submissions = Submission::all();
        return view('hello::submissions.index', ['submissions' => $submissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hello::submissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns',
            'message' => 'required'
        ]);

        $submission = Submission::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->route('hello.create')->with('hello.success', 'Submission Submitted Successfully');
;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submission $submission)
    {
        $submission->delete();

        return redirect()->route('hello.index')->with('hello.success', 'Submission Deleted Successfully');
    }
}
