@extends('layout.master')

@section('title', 'View All User')

@section('content')
    <div class="container-fluid col-md-6 col-md-offset">
        <div class="card mt-5">
            <div class="card-body">
                <div class="w3-container">
                    <table class="w3-table-all">
                        <thead>
                        <tr class="w3-green">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                            <tr onclick="location.assign('users/edit/{{$user->id}}'); " class="w3-hover-blue-gray pointer w3-text-blue w3-hover-text-white">
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->name}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

