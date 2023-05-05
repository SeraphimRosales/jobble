<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobSeekerProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('jobseeker');
    }

    public function index()
    {
        $user = auth()->user();
        return view('jobseeker.profile', compact('user'));
    }
    

    public function show()
    {
        $user = Auth::user();

        return view('jobseeker.profile', [
            'user' => $user,
        ]);
    }
}
