@extends ('layout')
@section ('content')

<h1>Delete Confirmation</h1>
<p>Are you sure you would like to delete:<br>
    Name: {{ $bookmark->bookmark_name }} <br>
    URL: {{ $bookmark->url }}
<form action="/delete/{{$bookmark->id}}" method="POST">
    {{ csrf_field() }}
  <input type="submit" name="yes" value="Yes">   
  <input type="submit" name="No" value="No">  
</form>

@endsection