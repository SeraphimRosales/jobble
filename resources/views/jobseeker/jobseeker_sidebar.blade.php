@extends('layouts.app')
@section('content')
<!-- Sidebar -->
<div class="sidebar">
    <ul>
        <li><a href="{{ route('jobseeker.dashboard') }}">Job Feed</a></li>
        <li><a href="{{ route('jobseeker.profile') }}">Profile</a></li>
        <li><a href="{{ route('jobseeker.chat') }}">Chat</a></li>
        <li><a href="{{ route('jobseeker.settings') }}">Settings</a></li>
    </ul>
</div>

<style>
    .sidebar {
        position: fixed;
        left: 0;
        top: 80px; /* Adjust this value based on your top navigation bar's height */
        width: 200px;
        height: 100%;
        background-color: #f5f5f5;
        padding: 20px;
        box-sizing: border-box;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .sidebar li {
        margin-bottom: 10px;
    }

    .sidebar a {
        text-decoration: none;
        color: #333;
    }

    .sidebar a:hover {
        color: #666;
    }
</style>
@endsection
