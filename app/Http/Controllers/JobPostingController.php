<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobPostingController extends Controller
{
    public function store(Request $request)
    {
        // validate the request
        $validatedData = $request->validate([
            'job_title' => 'required',
            'job_description' => 'required',
            'job_salary' => 'required',
            'position' => 'required',
            'requirements' => 'required',
            'location' => 'required',
            'company_name' => 'required',
            'website' => 'required',
        ]);
    
        // create a new JobPosting instance with the validated data
        $jobPosting = new JobPosting;
        $jobPosting->job_title = $validatedData['job_title'];
        $jobPosting->job_description = $validatedData['job_description'];
        $jobPosting->job_salary = $validatedData['job_salary'];
        $jobPosting->position = $validatedData['position'];
        $jobPosting->requirements = $validatedData['requirements'];
        $jobPosting->location = $validatedData['location'];
        $jobPosting->company_name = $validatedData['company_name'];
        $jobPosting->website = $validatedData['website'];
        $jobPosting->employer_id = Auth::user()->id;
        $jobPosting->save();
    
        // redirect back to the employer dashboard with a success message
        return redirect()->route('employer.dashboard')->with('success', 'Job posting created successfully.');
    }
    
}
