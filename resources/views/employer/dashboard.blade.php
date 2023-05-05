@extends('layouts.app')
@section('sidebar')
    @include('employer.employer_sidebar')
@endsection
@section('content')

<form method="POST" action="{{ route('postJob') }}">
    @csrf

    <div class="form-group">
        <label for="jobTitle">Job Title</label>
        <input type="text" name="jobTitle" id="jobTitle" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="jobDescription">Job Description</label>
        <textarea name="jobDescription" id="jobDescription" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label for="jobSalary">Job Salary</label>
        <input type="text" name="jobSalary" id="jobSalary" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="position">Position</label>
        <input type="text" name="position" id="position" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="requirements">Requirements</label>
        <textarea name="requirements" id="requirements" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" id="location" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="companyName">Company Name</label>
        <input type="text" name="companyName" id="companyName" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="website">Website</label>
        <input type="text" name="website" id="website" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Post Job</button>
</form>


@endsection
    
