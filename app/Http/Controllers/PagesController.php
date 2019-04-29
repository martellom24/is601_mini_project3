<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function profile()
    {
        $users = DB::table('users')->get();

        return view('pages.profile', ['users' => $users]);
    }

    public function faqs()
    {
        $posts = DB::table('posts')->get();

        return view('pages.faqs', ['posts' => $posts]);
    }

    public function library()
    {
        $posts = DB::table('posts')->get();

        return view('pages.library', ['posts' => $posts]);
    }

    public function users()
    {
        //$users = DB::table('users')->get();
        $profiles = DB::table('profiles')->get();

        return view('pages.users', ['profiles' => $profiles]);
    }

    public function subscription()
    {
        return view('pages.subscription');
    }

    public function subscribers()
    {
        $users = DB::table('users')->get();

        return view('pages.subscribers', ['users' => $users]);
    }
}
