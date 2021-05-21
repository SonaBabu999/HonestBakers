<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('loggeduser') )

        {

            if(session('loggeduser')=='admin')

            {

                if($request->path()!='ahome' && $request->path()!='amenu' && $request->path()!='astud' && $request->path()!='aitem'&& $request->path()!='afee'&& $request->path()!='afeeview'&& $request->path()!='afeedelete/{id}'&& $request->path()!='afeeedit/{id}'&& $request->path()!='menudelete/[id}'&& $request->path()!='edit/{sid}'&& $request->path()!='userdelete/{id}'&& $request->path()!='menudelete/[id}')

                {

                    return back();

                }

 

            }

            else

            {

                if($request->path()!='home' && $request->path()!='menu'&& $request->path()!='sfee'&& $request->path()!='profile'&& $request->path()!='chpass')

                {

                    return back();

                }

 

            }

            

        }

        else

        {

            if($request->path()!='/' && $request->path()!='reg')

            {

                return redirect('/')->with ('fail','You must be logged in');

            }

 

        }

        

        

        

        return $next($request)->header('cache-control','no-cache,no-store,max-age=0,must-revalidate')

        ->header('pragma','no-cache')

        ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');
    }
}
