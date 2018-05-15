<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Bookmark;

class BookmarksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $bookmarks = Bookmark::all()->sortBy('bookmark_name');
    
        return view('index', compact('bookmarks'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreBookmarks)
    {
        $bookmark = new Bookmark;

        $bookmark->bookmark_name = request('bookmark');
        $bookmark->url = request('url');
        $bookmark->user_id = auth()->id();
        
        $bookmark->save();
        return redirect('/');
    }

    public function show(Bookmark $bookmark)
    {
        if(auth()->id() != $bookmark->user_id)
        {
            return redirect('/');
        }
        return view('update', compact('bookmark'));
    }

    public function update(StoreBookmarks $bookmark)
    {
        $bookmark->bookmark_name = request('bookmark');
        $bookmark->url = request('url');

        $bookmark->save();
        return redirect('/');
    }
    
    public function delete(Bookmark $bookmark)
    {
        if(auth()->id() != $bookmark->user_id)
        {
            return redirect('/');
        }
        return view('delete', compact('bookmark'));
    }

    public function deleteConfirm(Bookmark $bookmark)
    {
        if(auth()->id() != $bookmark->user_id)
        {
            return redirect('/');
        }
        if(Input::get('yes')) {
            $id = $bookmark->id;
            $bookmark = Bookmark::find($id);
    
            $bookmark->delete();
        }
        return redirect('/');
    }
}
