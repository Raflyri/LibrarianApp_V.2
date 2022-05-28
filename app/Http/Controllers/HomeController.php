<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, Closure $next, ...$guards)
    {
        return view('dashboard.view');

        /*$guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if ($guard == 'admin' && Auth::guard($guard)->check()) {
                //return redirect(RouteServiceProvider::ADMIN_HOME);
                return view('admin.dashboard.view');
            }

            if (Auth::guard($guard)->check()) {
                //return redirect(RouteServiceProvider::HOME);
                return view('dashboard.view');
            }
        }

        return $next($request);*/
    }
}
