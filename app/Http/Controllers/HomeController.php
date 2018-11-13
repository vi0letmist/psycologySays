<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Submit;

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
        /* return view('home'); */
        $request->user()->authorizeRoles(['user', 'admin']);
        if (Auth::user()->hasRole('admin')) {
            return view('admin.index');
            }

        elseif (Auth::user()->hasRole('user')) {

            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('submits', $user->submits);

        }
    }
}
