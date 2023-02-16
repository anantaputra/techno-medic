@extends('layouts.app')

@section('content')
<div class="container">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{route('login')}}"><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <input type="text" name="name" class="form-control" placeholder="Full name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        @error('name')
                        <span id="exampleInputEmail1-error" style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #dc3545">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <input type="text" name="username" class="form-control" placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        @error('username')
                        <span id="exampleInputEmail1-error" style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #dc3545">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('password')
                        <span id="exampleInputEmail1-error" style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #dc3545">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
        
                    </div>
                </form>
                <a href="{{route('login')}}" class="text-center">I already have a membership</a>
            </div>
        
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        document.body.classList.add("register-page")
    </script>
@endsection

