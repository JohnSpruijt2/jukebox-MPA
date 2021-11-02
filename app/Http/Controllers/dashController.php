<?php

namespace App\Http\Controllers;
use App\Classes\Playlist;
use Illuminate\Http\Request;
use Auth;
use DB;
use Cookie;
use Tracker;
use Session;
class dashController extends Controller
{
    //
    public function index() {
        $user = Auth::user();
        SavedList::getListById($user->id);
        $tempPlay = Playlist::getSavedList();
        return view('dash', ['playlists' => $playlists, 'tempPlaylists' => $tempPlay]);
    }
}
