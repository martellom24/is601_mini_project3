<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $questions = $user->questions()->paginate(6);
        return view('home')->with('questions', $questions);
    }

    /**
     * Instantiate subscription view
     *
     * @return void
    */
    public function subscription()
    {

        return view('subscription');

    }

    /**
     * Instantiate subscription view
     *
     * @return void
     */
    public function postSubscription(Request $request)
    {

        $user = new User;
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $user->newSubscription('main',$request->subscription)->create($request->token);

        if ($user->subscribed('main')) {
            return response()->json(['msg'=>'Successfully subscribed']);
        }

        return response()->json(['msg'=>'Oops there is something error with your input']);

    }


}
