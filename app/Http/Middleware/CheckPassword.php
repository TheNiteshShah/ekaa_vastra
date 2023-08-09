<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            // Perform password recheck logic here
            // Example: Check if the user's password has changed since login
            // If the password recheck fails, you can log the user out
            // and redirect them to the login page
            // Example: 
            Auth::logout();
            return redirect()->route('login');
        }
        return $next($request);
    }
}
