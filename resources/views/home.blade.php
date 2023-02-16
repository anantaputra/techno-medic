@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-footer">
                    <form action="{{route('logout')}}" method="post" id="logout">
                        @csrf
                    </form>
                    <a onclick="document.querySelector('#logout').submit()" class="nav-link" href="#" role="button">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
