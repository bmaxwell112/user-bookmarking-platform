@extends ('layout')
@section ('content')
<p><a href="/create">Create a new Bookmark</a></p>
    <table>
        <tr>
            <th style="text-align: left; width 200px;">Bookmark</th>
            <th style="text-align: left;">URL</th>
            <th style="text-align: left;"></th>
           </tr>
           @foreach($bookmarks as $bookmark)
           <tr>
               <th>{{$bookmark->bookmark_name}}</th>
               <th>{{$bookmark->url}}</th>
          <th>
          @if($bookmark->user_id == Auth::id())
            <a href="/update/{{ $bookmark->id }}">edit</a>   <a href="/delete/{{ $bookmark->id }}">delete</a>
          @endif
          </th>             
           </tr>
           @endforeach 
    </table>
@endsection