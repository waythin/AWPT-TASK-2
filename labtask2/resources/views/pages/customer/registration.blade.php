@extends('layouts.app')



@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  /* padding: 12px; */
  background-color: white;
}


.textred {
  color: red;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 8px;
  margin: 2px 0 15px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #00b8e6;
  color: white;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="{{route('submit')}}" method="post">
  {{csrf_field()}}

  <div class="container">
    <h1>Registration</h1>
    <p>Please fill in this form.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" >
    @error('name')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="id"><b>User ID</b></label>
    <input type="text" placeholder="Enter User ID" name="id" id="id" >
    @error('id')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="phone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone" id="phone">
    @error('phone')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" id="email">
    @error('email')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" >
    @error('psw')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="cpsw"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Confirm Password" name="cpsw" id="cpsw" >
    @error('cpsw')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>


    <button type="submit" class="registerbtn">CONFIRM REGISTRATION</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="{{route('login') }}">Login</a>.</p>
  </div>
</form>

</body>
</html>
@endsection 
