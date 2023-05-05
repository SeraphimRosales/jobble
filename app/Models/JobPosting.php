<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'job_title' => 'required|max:255',
            'job_description' => 'required',
            'job_salary' => 'required|numeric',
            'position' => 'required|max:255',
            'requirements' => 'required',
            'location' => 'required|max:255',
            'company_name' => 'required|max:255',
            'company_website' => 'required|url',
        ]);
    
        $jobPosting = new JobPosting;
        $jobPosting->job_title = $validatedData['job_title'];
        $jobPosting->job_description = $validatedData['job_description'];
        $jobPosting->job_salary = $validatedData['job_salary'];
        $jobPosting->position = $validatedData['position'];
        $jobPosting->requirements = $validatedData['requirements'];
        $jobPosting->location = $validatedData['location'];
        $jobPosting->company_name = $validatedData['company_name'];
        $jobPosting->company_website = $validatedData['company_website'];
    
        auth()->user()->jobPostings()->save($jobPosting);
    
        return redirect()->route('employer.dashboard')->with('success', 'Job posted successfully!');
    }
    


}
