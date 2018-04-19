@extends ('layout')
@section ('content')


    <h1>Register</h1>
    <form action="/register" method="POST">
	    {{ csrf_field() }}
        Name:<br>
        <input type="text" name="name" id="name"><br>
        Email:<br>
        <input type="text" name="email" id="email"><br>
        Password:<br>
        <input type="password" name="password" id="password"><br>
        Confirm Password:<br>
        <input type="password" name="password_confirmation" id="password_confirmation"><br>
        
        <input type="submit" name="submit" value="Register">
    </form><br>
    <p>Already have an acccount? <a href="/login">Login Here</a></p>
@endsection