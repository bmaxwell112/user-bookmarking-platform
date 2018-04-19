@extends ('layout')
@section ('content')

<h2>Update Your Bookmark</h2>
<p><a href="/">Back to all bookmark</a></p>
<form action="/update/{{ $bookmark->id }}" method="POST">
    {{ csrf_field() }}
  Bookmark Name:<br>
  <input type="text" name="bookmark" value="{{ $bookmark->bookmark_name }}"><br>
  Bookmark URL:<br>
  <input type="text" name="url" value="{{ $bookmark->url }}"><br>
  User:<br>
  <input type="submit" name="submit" value="Submit">
  
</form>

@endsection