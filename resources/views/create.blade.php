@extends ('layout')
@section ('content')

<h2>Create A Bookmark</h2>
<p><a href="/">Back to all bookmark</a></p>
<form action="/" method="POST">
    {{ csrf_field() }}
  Bookmark Name:<br>
  <input type="text" name="bookmark" ><br>
  Bookmark URL:<br>
  <input type="text" name="url" ><br>
  User:<br>
  <input type="submit" name="submit" value="Submit">
  
</form>

@endsection