<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
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
        $url_lang = $request->segment(1);
        if($url_lang !== 'api') {
            if (!in_array($url_lang, config('app.locales'), true)) {
                return redirect(app('locale-for-client') . '/' . request()->path());
            }
            app()->setLocale($url_lang);
        }
        return $next($request);
    }
}
