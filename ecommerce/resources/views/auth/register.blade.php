@extends('layout.master')

@section('title', 'Register')

@section('content')
    <div class="container-fluid col-md-6 col-md-offset">
        <div class="card mt-5">
            <div class="card-body">
                <form method="post">
                    @csrf
                    <legend class="text-center text-info">REGISTER</legend>
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger p-1" role="alert">
                            {{$error}}
                        </div>
                    @endforeach
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" class="form-control form-control-sm rounded-0" name="name" id="name" aria-describedby="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control form-control-sm rounded-0" name="email" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control form-control-sm rounded-0" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control form-control-sm rounded-0" name="password_confirmation" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-sm float-right btn-primary rounded-0">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
