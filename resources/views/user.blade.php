@extends('layouts.admin')
@section('content')    
<script type="text/javascript">
    function yesnoCheck() {
        if (document.getElementById("male").checked) {
            document.getElementById("yes").style.display = "block";
        } else {
            document.getElementById("yes").style.display = "none";
        }
    }
</script>
<h1 class = "display-3">Form for submit users data</h1>
    <div class = "container mt-5">
        @if($message = Session::get('success'))
        <div class = 'alert alert-success alert-block'>
            <strong>{{ $message }}</strong>
        </div>
        <br>
        @endif
        <form action="{{url('save')}}" method = 'post' accept-charset='utf-8'>
            @csrf
            <div class ="form-group">
                <label class = "control-label" for="firstname">First Name</label>
                <input type = "text" name = "firstname" class = "form-control" placeholder = "enter your first name" id="first_name">
                <span id="err1" class="text-danger">@error('firstname'){{$message}}@enderror</span>
            </div>

            <div class ="form-group">
                <label class = "control-label" for="lastname">Last Name</label>
                <input type = "text" name = "lastname" class = "form-control" placeholder = "enter your last name" id="last_name">
                <span id="err2" class="text-danger">@error('lastname'){{$message}}@enderror</span>
            </div>

            <div class ="form-group">
                <label class = "control-label" for="Name">Email</label>
                <input type = "email" name = "email" class = "form-control" placeholder = "enter your email" id="email">
                <span id="err3" class="text-danger">@error('email'){{$message}}@enderror</span>
            </div>

            <div class ="form-group">
                <label class = "control-label" for="Contact Number">phone</label>
                <input type = "text" name = "phone" class = "form-control" placeholder = "enter your contact number" id = "phone">
                <span id="err4" class="text-danger">@error('phone'){{$message}}@enderror</span>
            </div>

            <div class ="form-group">
                <label class = "control-label" for="city">City</label>
                <input type = "text" name = "city" class = "form-control" placeholder = "enter your city" id="city">
                <span id="err5" class="text-danger">@error('city'){{$message}}@enderror</span>
            </div>

            <div class="form-group" onchange="yesnoCheck()">
                <label class = "control-label" for="gender" id ="gender">Gender</label>
            
                <div class="mb-3 form-check from-check-inline">
                    <input type="radio" name="gender" id="male" class="form-check-input" value="male">
                    <label class="form-check-label">Male</label>
                </div>
                <div class="mb-3 form-check from-check-inline"> 
                    <input type="radio" name="gender" id="female" class="form-check-input" value="female">
                    <label class="form-check-label">Female</label>
                </div>
            <span class="text-danger">@error('gender'){{$message}}@enderror</span>
                
            </div>

            <div class ="form-group" id="yes" style="display: none; >
                <label class = "control-label" for="age">Age</label>
                <input type = "text" name = "age" class = "form-control" placeholder = "enter your Age" id="age">
                <span id="err9"class="text-danger">@error('age'){{$message}}@enderror</span>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Profile Photo</label>
                <input type="file" name="pro_img"  class="form-control" id="image">
            <span id="err7"class="text-danger">@error('image'){{$message}}@enderror</span>
            </div>

            <div class = "form-group" id ="checkRadio">
                <label class = "control-label" for="status">Status</label>
                <div class="mb-3 form-check from-check-inline">
                    <input type="radio" name="status" id="active" class="form-check-input" value="Active">
                    <label class="form-check-label">Active</label>
                </div>
                <div class="mb-3 form-check from-check-inline"> 
                    <input type="radio" name="status" id="inactive" class="form-check-input" value="Inactive">
                    <label class="form-check-label">Inactive</label>
                </div>
                <span class="text-danger">@error('status'){{$message}}@enderror</span>
            </div>

            <br><span id="err8" class="text-danger"></span>
            <br>

            <div class ="form-group">
                <div class ="col-sm-offset-2">
                    <center>
                    <button type = "submit" class = "btn btn-success" >Submit</button>
                    </center>
                </div>
            </div>

        </form>
    </div>
@endsection
