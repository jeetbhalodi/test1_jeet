@extends('layouts.admin')
@section('content')
        <h1 style="text-align:center;">Show Users</h1>
        <div class="container"style="margin-left:250px">
        <button class="btn btn-success mb-3" onclick="window.location='{{ url("/user") }}'">Add User</button>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>City</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Profile Photo</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['firstname']}}</td>
                <td>{{$user['lastname']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['phone']}}</td>
                <td>{{$user['city']}}</td>
                <td>{{$user['gender']}}</td>
                <td>{{$user['age']}}</td>
                <td><img src='http://localhost/MyImages/{{$user['pro_img']}}' style='width:100px;height:100px' /></td>
                <td>{{$user['status']}}</td>
                <td>
                    <button class="btn btn-primary"> <a href={{"edit/".$user['id']}} style=" text-decoration:none; color:white;">Edit</a></button>
                    <button class="btn btn-danger"><a onclick="return myFunction();" href={{"delete/".$user['id']}} style=" text-decoration:none; color:white;">Delete</a></button>
                </td>
            </tr>
            @endforeach
        </table> 
        </div> 
@endsection
