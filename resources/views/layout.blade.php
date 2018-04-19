<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title></title>
    </head>
    <body>
        @if(Auth::check()) 
            <h1>Welcome {{Auth::user()->name}}</h1>            
            <form action="/logout" method="POST">
            {{ csrf_field() }}
            <input type="submit" name="submit" value="Logout">
            </form>        
        @endif
        @yield('content')
        @if(count($errors))
        <div>
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </body>
</html>
