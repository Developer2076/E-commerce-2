@extends('layout.master')

@section('title', 'CREATE ROLE')

@section('content')
    <div class="container-fluid col-md-6 col-md-offset">
        <div class="card mt-5">
            <div class="card-body">
                <form method="post">
                    @csrf
                    <legend class="text-center w3-red">CREATE ROLE</legend>
                    @if(session('status'))
                        <div class="alert alert-success text-center mt-2 mb-2 pt-2 pb-2 rounded-0">{{session('status')}}</div>
                    @endif
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger p-1" role="alert">
                            {{$error}}
                        </div>
                    @endforeach
                    <div class="form-group">
                        <label for="name" class="text-warning">Add Role</label>
                        <input type="text" class="form-control form-control-sm rounded-0" name="name" id="name" placeholder="Enter your role">
                    </div>
                    <button type="submit" class="btn btn-sm float-right btn-success rounded-0">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection

