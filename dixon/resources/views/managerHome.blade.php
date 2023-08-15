@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    You are a Manager User.
                    <div class="Section_top" style="margin-top:0px;">


            <div align="center"
                class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
                style="margin-top:10px;">

                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        @auth
                            <a href="{{ url('/home') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                        @else
                            <a href="{{ route('login') }}" class="animated-button7">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="animated-button1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <h3 style="margin-left:-1200px; margin-top:32px; font-size:30px;">Gaming <span>Lab </span>
                    <br> E-SPORT
                </h3>
                <div class="dropdown" style="margin-left:1500px; margin-top:-80px; font-size:15px;">
                    <button class="dropbtn" style="font-size:24px"><i class="fa fa-address-card-o"></i></button>
                    <div class="dropdown-content">
                        <a>
                            {{ Auth::user()->name }}
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection