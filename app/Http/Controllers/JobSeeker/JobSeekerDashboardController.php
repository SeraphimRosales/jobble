<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobSeekerDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('jobseeker'); // add this line
    }

    public function index()
    {
        return view('jobseeker.dashboard');
    }

    public function profile()
    {
        return view('jobseeker.profile');
    }

    public function chat()
    {
        return view('jobseeker.chat');
    }

    public function settings()
    {
        return view('jobseeker.settings');
    }

    public function authenticated(Request $request, $user)
    {
        if ($user->role_id === 2) { // check if user is a job seeker
            return redirect()->route('jobseeker.dashboard');
        }
        return redirect('/');
    }
}


