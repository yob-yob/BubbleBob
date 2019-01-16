@extends('master')

@section('auth.navbar')
    <div class="right" style="margin-right:3rem;">
        <a class="dropdown-trigger btn" href="#" data-target='profileDropdown' style="">Profile</a>
        <ul id="profileDropdown" class="dropdown-content" style="">
            <li>Profile</li>
            <li>Account Settings</li>
            <li>
                <a href="/logout">logout</a>
            </li>
        </ul>
    </div>
@endsection

@section('auth.sidenav')

@endsection

@section('content')
    @yield('Auth.Content')
@endsection

@push('styles')
    <!-- Styles -->
    <style>
        
    </style>
@endpush