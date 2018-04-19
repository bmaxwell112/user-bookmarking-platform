<p>@extends ('layout')
@section ('content')
	<h1>Sign in</h1>
	<form action="/login" method="POST">
	    {{ csrf_field() }}
        Email:<br>
        <input type="text" name="email" id="email"><br>
        Password:<br>
        <input type="password" name="password" id="password"><br>
        
        <input type="submit" name="submit" value="Login">
    </form><br>
    <p>Don't have an acccount? <a href="/register">Register Here</a></p>
@endsection