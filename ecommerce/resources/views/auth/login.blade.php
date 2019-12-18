@extends('layout.master')

@section('title', 'Login')

@section('content')
    <div class="container-fluid col-md-6 col-md-offset">
        <div class="card mt-5">
            <div class="card-body">
                <form method="post">
                    @csrf
                    <legend class="text-center">Login</legend>
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger p-1" role="alert">
                            {{$error}}
                        </div>
                    @endforeach
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control form-control-sm rounded-0" name="email" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control form-control-sm rounded-0" name="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-sm float-right btn-primary rounded-0">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
